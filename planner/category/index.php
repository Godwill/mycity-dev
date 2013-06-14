<?php include '../../system/initialize.php'; ?>
<?php include '../../template/header.php'; ?>
<aside class="aside-120 left"><?php include '../../template/wedding/sidebar-left.php'; ?></aside>
<div class="main-content-770">
  <?php
  if(isset($url[3])){
    $system = $url[3]; 
    #print_r($url[3]);   
    $country = get_country($url[1]);
    $category = Category::find_by_sql("SELECT * FROM wedding_categories WHERE system='{$system}'");
    foreach($category as $category):
    $company = Company::find_by_sql("SELECT * FROM companies WHERE category=4 AND type='{$category->id}'");
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
    redirect_to('../');
    
    }
  else {
  
}?>
</div>
<?php include '../../template/footer.php'; ?>