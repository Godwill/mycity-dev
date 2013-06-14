<?php include '../system/initialize.php'; ?>
<?php include '../template/simple-header.php'; ?>
<div class="aside-120 left side-small"><?php include '../template/wedding/sidebar-left.php'; ?></div>
<?php 
/*
 *  the query looks up the company table's type and category columns.
 *  All wedding services providers in the companies table have category 4 and the type
 *  column relates to the id in the wp_categories table.
 * 
 */
  if(isset($url[3])){
    $system = $url[4]; 
    #print_r($url[1]);   
    $country = get_country($url[1]);
    $category = Category::find_by_sql("SELECT * FROM wedding_categories WHERE system='{$system}'");
    foreach($category as $category):
    $company = Company::find_by_sql("SELECT * FROM companies WHERE country='{$country}' AND category=4 AND type='{$category->id}'");
    foreach($company as $company): ?>
   <div class="featured" style="width: 300px;margin: 2px;">
      <div style="width: 50px; height: 50px;float: left; margin: 5px;">
        <img src="<?php echo PATH ?>images/logos/<?php echo $company->logo; ?>" />
      </div>
      <a href="<?php echo PATH; ?><?php echo code_to_country($company->country); ?>/directory/<?php echo $company->system;?>"><?php echo $company->name; ?></a></br>  
      <a href="<?php echo PATH; ?>directory/search/?city=<?php echo $company->city;?>"><?php echo get_city($company->city);?>      </a>, 
      <span class="capitalize"><a href="<?php echo PATH; ?><?php echo code_to_country($company->country)?>/directory/"><?php echo code_to_country($company->country)?></a></span></br>

   </div>
    <?php endforeach;
    endforeach;
    }
  elseif(isset ($url[3]) && !isset($url[4])){
    echo 'please choose a category.';}
  else {
    $country = get_country($url[1]);
  $company = Company::find_by_sql("SELECT * FROM companies WHERE country='{$country}' AND category=4");
    foreach($company as $company): ?>
   <div class="featured" style="width: 300px;margin: 2px;">
      <div style="width: 50px; height: 50px;float: left; margin: 5px;">
        <img src="<?php echo PATH ?>images/logos/<?php echo $company->logo; ?>" />
      </div>
      <a href="<?php echo PATH; ?><?php echo code_to_country($company->country); ?>/directory/<?php echo $company->system;?>"><?php echo $company->name; ?></a></br>  
      <a href="<?php echo PATH; ?>directory/search/?city=<?php echo $company->city;?>"><?php echo get_city($company->city);?>      </a>, 
      <span class="capitalize"><a href="<?php echo PATH; ?><?php echo code_to_country($company->country)?>/directory/"><?php echo code_to_country($company->country)?></a></span></br>
    <?php echo get_category('wp_categories', $company->category); ?>
   </div>
    <?php endforeach;
}
?>