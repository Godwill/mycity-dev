<?php include '../../system/initialize.php'; ?>
<?php include '../../template/header.php'; ?>
<div style="width: 770px;float: left;">
  <?php
    if(isset($_GET['city'])){
      $city_id = $_GET['city'];
      $company = Company::find_by_sql("SELECT * FROM companies WHERE city='{$city_id}'");
      foreach($company as $company): ?>

  <div class="featuredSearch" style="width: 244px;float:left;">
  <img src="<?php echo PATH ?>images/logos/<?php echo $company->logo; ?>" />
  <a href="<?php echo PATH; ?><?php echo code_to_country($company->country); ?>/directory/<?php echo $company->system;?>"><?php echo $company->name; ?></a></br>
<a href="<?php echo PATH; ?>directory/search/?city=<?php echo $company->city;?>"><?php echo get_city($company->city);?></a>, <span class="capitalize"><a href="<?php echo PATH; ?><?php echo code_to_country($company->country)?>/directory/"><?php echo code_to_country($company->country)?></a></span></br>
      <a href="<?php echo PATH; ?>directory/search/?industry=<?php echo $company->industry; ?>"><?php echo get_industry($company->industry); ?></a>
</div>
      
  
  <?php endforeach; ?>
  
  
  <?php
    }elseif(isset($_GET['industry'])){ 
      $industry = $_GET['industry'];
      $companies = Company::find_by_sql("SELECT * FROM companies WHERE industry='{$industry}'");
    foreach ($companies as $company): ?>
  
    <div class="list-container span-190" >
  <a href="<?php echo PATH ?><?php if($company->country == "bw"){ ?>botswana/<?php }elseif($company->country == "na"){ ?>namibia/<?php }elseif($company->country == "zm"){ ?>zambia/<?php }elseif($company->country == "zw"){ ?>zimbabwe/<?php } ?>directory/<?php echo $company->system?>"> 
      <div class="list-pic"><img src="<?php echo PATH ?>images/logos/<?php echo $company->logo;?>" width="50" height="50"></div>
      </a>
      <ul>
        <li><a href="<?php echo PATH ?><?php if($company->country == "bw"){ ?>botswana/<?php }elseif($company->country == "na"){ ?>namibia/<?php }elseif($company->country == "zm"){ ?>zambia/<?php }elseif($company->country == "zw"){ ?>zimbabwe/<?php } ?>directory/<?php echo $company->system?>"> <?php echo $company->name; ?></a></li>
      <li>
        <?php 
        $city_id = $company->city;
        $sql = "SELECT * FROM cities WHERE id={$city_id}";
        $city = City::find_by_sql($sql);
        foreach($city as $city): ?>
  <a href="<?php echo PATH ?>directory/search/?city=<?php echo $city->id; ?>"><?php echo $city->name; ?></a>
  <?php endforeach; #end of city look up?></li>
      
   </ul>
</div>
   <?php endforeach; #end of city look up?> 
   <?php }  else {
     echo 'show search form';
    }
  ?>
</div>
<div class="aside-250 right" style="">
<script type="text/javascript">
var uri = 'http://imp.tradedoubler.com/imp?type(js)pool(478401)a(2113950)' + new String (Math.random()).substring (2, 11);
document.write('<sc'+'ript type="text/javascript" src="'+uri+'" charset="ISO-8859-1"></sc'+'ript>');
</script>
</div>
<?php include '../../template/footer.php'; ?>

