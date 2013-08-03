<?php include '../../system/initialize.php'; ?>
<?php include '../template/header.php'; ?>
<aside class="aside-120 left"><?php include '../template/sidebar-left.php'; ?></aside>
<div class="main-content">
<h3>Vendors Listed under '<span style="text-transform: capitalize;"><?php echo $url[2]; ?>'</span></h3>
  <?php
  if(isset($url[2])){
    $system = $url[2]; 
    #print_r($url);   
    $country = get_country($url[1]);
    $city = City::find_by_sql("SELECT * FROM cities WHERE system='{$system}'");
    foreach($city as $city):
    #print_r($category);
    $company = Company::find_by_sql("SELECT * FROM companies WHERE city='$city->id' AND type=4");
    foreach($company as $company): ?>
  
   <div class="featured" style="width: 250px;margin: 2px;">
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
  echo 'nothing set';
  print_r($url);
}?>
</div>
<aside class="film-strip right">
  	<div class="ad"></div>
	<div class="ad"></div>
	<div class="ad"></div>
	<div class="ad"></div>
	<div class="ad"></div>
	<div class="ad"></div>
	<div class="ad"></div>
	<div class="ad"></div>
	<div class="ad"></div>
	<div class="ad"></div>
	<div class="ad"></div>
	<div class="ad"></div>  
  </aside>
<?php include '../../template/footer.php'; ?>