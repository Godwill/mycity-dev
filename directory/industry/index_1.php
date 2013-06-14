<?php include '../../system/initialize.php'; ?>
<?php include '../../template/header.php'; ?>
<div style="width: 770px;float: left;">
  <?php
    if(isset($_GET['city'])){
      $city_id = $_GET['city'];
      $company = Company::find_by_sql("SELECT * FROM companies WHERE industry='{$city_id}'");
      foreach($company as $company): ?>
  <div class="list-container span-190">
  <a href="<?php echo PATH; ?><?php if($company->country == "bw"){ ?>botswana/<?php }elseif($company->country == "na"){ ?>namibia/<?php }elseif($company->country == "zm"){ ?>zambia/<?php }elseif($company->country == "zw"){ ?>zimbabwe/<?php } ?>directory/<?php echo $company->system;?>">
    
<div class="list-container span-190">
  <a href="<?php echo PATH ?><?php if($company->country == "bw"){ ?>botswana/<?php }elseif($company->country == "na"){ ?>namibia/<?php }elseif($company->country == "zm"){ ?>zambia/<?php }elseif($company->country == "zw"){ ?>zimbabwe/<?php } ?>directory/<?php echo $company->system?>"> 
      <div class="list-pic"><img src="<?php echo PATH ?>images/logos/<?php echo $company->logo;?>" width="50" height="50"></div>
      </a>
      <ul>
        <li><a href="<?php echo PATH ?><?php if($company->country == "bw"){ ?>botswana/<?php }elseif($company->country == "na"){ ?>namibia/<?php }elseif($company->country == "zm"){ ?>zambia/<?php }elseif($company->country == "zw"){ ?>zimbabwe/<?php } ?>directory/<?php echo $company->system?>"> <?php echo $company->name; ?></a></li>
      <li>
       <?php
          $industry_id = $company->industry;
      $industries = Industry::find_by_sql("SELECT * FROM industries WHERE id='{$industry_id}'");
      foreach ($industries as $industry): ?>
          <a href="<?php echo PATH ?>directory/search/?industry=<?php echo $industry->id; ?>"><?php  echo $industry->name; ?></a>
    <?php  endforeach; ?>
      </li>
        
   </ul>
</div>
  
  </a>
  
  
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
dafpjpskdf</p>
sdfjspdfoksdf
</div>
<?php include '../../template/footer.php'; ?>

