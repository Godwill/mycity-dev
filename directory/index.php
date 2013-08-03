<?php include '../system/initialize.php'; ?>
<?php include '../template/header.php'; ?>
<div class="main-content-long">
 
  <div class="section categories"><h3>Featured Companies</h3>
  <div id="featured-companies" style="margin-bottom: 20px;">
   <ul class="nav nav-tabs" id="myTab">
     <li><a href="#botswana" data-toggle="tab">BOTSWANA</a></li>
      <li><a href="#namibia" data-toggle="tab">NAMIBIA</a></li>
     <li><a href="#zambia" data-toggle="tab">ZAMBIA</a></li>
     <li><a href="#zimbabwe" data-toggle="tab">ZIMBABWE</a></li>
   </ul>
    
  <div class="tab-content" >
    
    <div class="tab-pane active" id="botswana">
        <?php
            $companies = Company::find_by_sql("SELECT * FROM companies WHERE country='bw' LIMIT 20");
            foreach ($companies as $company): ?>

<div class="featured" style="width: 300px;margin: 2px;">
      <div style="width: 50px; height: 50px;float: left; margin: 5px;">
        <img src="<?php echo PATH ?>images/logos/<?php echo $company->logo; ?>" />
      </div>
  
  <a href="<?php echo PATH; ?><?php echo code_to_country($company->country); ?>/directory/<?php echo $company->system;?>"><?php echo $company->name; ?></a></br>
          
      <a href="<?php echo PATH; ?>directory/search/?city=<?php echo $company->city;?>"><?php echo get_city($company->city);?></a>, 
      <span style="text-transform: capitalize;"><a href="<?php echo PATH; ?><?php echo code_to_country($company->country)?>/directory/"><?php echo code_to_country($company->country)?></a></span></br>
    <?php
      $industry_id = $company->industry;
      $industries = Industry::find_by_sql("SELECT * FROM industries WHERE id='{$industry_id}'");
      foreach ($industries as $industry): ?>
       <a href="<?php echo PATH ?>directory/search/?industry=<?php echo $industry->id; ?>"><?php  echo $industry->name; ?></a>  <?php  endforeach; ?>
</div>
  
   
    <?php endforeach;?>
  </div><?php //end of Botswana Panel?>
    
    
    <div class="tab-pane" id="namibia">
        <?php
            $companies = Company::find_by_sql("SELECT * FROM companies WHERE country='na' LIMIT 20");
            foreach ($companies as $company): ?>

<div class="featured"  style="width: 300px;margin: 2px;">
      <div style="width: 50px; height: 50px;float: left; margin: 5px;">
        <img src="<?php echo PATH ?>images/logos/<?php echo $company->logo; ?>" />
      </div>
  
  <a href="<?php echo PATH; ?><?php echo code_to_country($company->country); ?>/directory/<?php echo $company->system;?>"><?php echo $company->name; ?></a></br>
          
      <a href="<?php echo PATH; ?>directory/search/?city=<?php echo $company->city;?>"><?php echo get_city($company->city);?></a>, 
      <span style="text-transform: capitalize;"><a href="<?php echo PATH; ?><?php echo code_to_country($company->country)?>/directory/"><?php echo code_to_country($company->country)?></a></span></br>
    <?php
      $industry_id = $company->industry;
      $industries = Industry::find_by_sql("SELECT * FROM industries WHERE id='{$industry_id}'");
      foreach ($industries as $industry): ?>
       <a href="<?php echo PATH ?>directory/search/?industry=<?php echo $industry->id; ?>"><?php  echo $industry->name; ?></a>  <?php  endforeach; ?>
</div>
   
    <?php endforeach;?>
    </div><?php //end of Namibia Pane?>
   <div class="tab-pane" id="zambia">
       <?php
            $companies = Company::find_by_sql("SELECT * FROM companies WHERE country='zm' LIMIT 20");
            foreach ($companies as $company): ?>

<div class="featured"  style="width: 300px;margin: 2px;">
      <div style="width: 50px; height: 50px;float: left; margin: 5px;">
        <img src="<?php echo PATH ?>images/logos/<?php echo $company->logo; ?>" />
      </div>
  
  <a href="<?php echo PATH; ?><?php echo code_to_country($company->country); ?>/directory/<?php echo $company->system;?>"><?php echo $company->name; ?></a></br>
          
      <a href="<?php echo PATH; ?>directory/search/?city=<?php echo $company->city;?>"><?php echo get_city($company->city);?></a>, 
      <span style="text-transform: capitalize;"><a href="<?php echo PATH; ?><?php echo code_to_country($company->country)?>/directory/"><?php echo code_to_country($company->country)?></a></span></br>
    <?php
      $industry_id = $company->industry;
      $industries = Industry::find_by_sql("SELECT * FROM industries WHERE id='{$industry_id}'");
      foreach ($industries as $industry): ?>
       <a href="<?php echo PATH ?>directory/search/?industry=<?php echo $industry->id; ?>"><?php  echo $industry->name; ?></a>  <?php  endforeach; ?>
</div>
   
    <?php endforeach;?>
   </div><?php //end of Zambia pane ?>
   <div class="tab-pane" id="zimbabwe">
       <?php
            $companies = Company::find_by_sql("SELECT * FROM companies WHERE country='zw' LIMIT 20");
            foreach ($companies as $company): ?>

<div class="featured"  style="width: 300px;margin: 2px;">
      <div style="width: 50px; height: 50px;float: left; margin: 5px;">
        <img src="<?php echo PATH ?>images/logos/<?php echo $company->logo; ?>" />
      </div>
  <a href="<?php echo PATH; ?><?php echo code_to_country($company->country); ?>/directory/<?php echo $company->system;?>"><?php echo $company->name; ?></a></br>
          
      <a href="<?php echo PATH; ?>directory/search/?city=<?php echo $company->city;?>"><?php echo get_city($company->city);?></a>, 
      <span style="text-transform: capitalize;"><a href="<?php echo PATH; ?><?php echo code_to_country($company->country)?>/directory/"><?php echo code_to_country($company->country)?></a></span></br>
    <?php
      $industry_id = $company->industry;
      $industries = Industry::find_by_sql("SELECT * FROM industries WHERE id='{$industry_id}'");
      foreach ($industries as $industry): ?>
       <a href="<?php echo PATH ?>directory/search/?industry=<?php echo $industry->id; ?>"><?php  echo $industry->name; ?></a>  <?php  endforeach; ?>
</div>
   
    <?php endforeach;?>
   </div><?php //end of Zimbabwe Pane ?>
  </div>
 </div> 
  </div>
  
  
  <div class="section categories" style="margin-bottom: 50px;">
    <h3><a href="industries">Find by Industry</a></h3>
    <?php
      $industry = Industry::find_all();
      foreach($industry as $industry): ?>
       <div class="industry-list"><a href="<?php echo PATH ?>directory/industry/<?php echo $industry->system; ?>"><?php echo $industry->name; ?></a></div>
         <?php endforeach; ?>
  </div><?php //end of find by industry ?>
  
  <div class="section categories"><h3>Just Added</h3>
  <div id="featured-companies">
   <ul class="nav nav-tabs" id="myTabAdded">
     <li><a href="#botswana-added" data-toggle="tab">BOTSWANA</a></li>
      <li><a href="#namibia-added" data-toggle="tab">NAMIBIA</a></li>
     <li><a href="#zambia-added" data-toggle="tab">ZAMBIA</a></li>
     <li><a href="#zimbabwe-added" data-toggle="tab">ZIMBABWE</a></li>
   </ul>
    
  <div class="tab-content">
    <div class="tab-pane active" id="botswana-added">
        <?php
            $companies = Company::find_by_sql("SELECT * FROM companies WHERE country='bw' ORDER BY created DESC LIMIT 20");
            foreach ($companies as $company): ?>

<div class="featured"  style="width: 300px;margin: 2px;">
      <div style="width: 50px; height: 50px;float: left; margin: 2px;">
        <img src="<?php echo PATH ?>images/logos/<?php echo $company->logo; ?>" />
      </div>
      <a href="<?php echo PATH; ?><?php echo code_to_country($company->country); ?>/directory/<?php echo $company->system;?>"><?php echo $company->name; ?></a></br>
          
      <?php echo get_city($company->city);?>, 
        
  <a href="<?php echo PATH ?><?php echo code_to_country($company->country); ?>/directory"><?php echo code_to_country($company->country); ?></a></br>
          <?php
          $industry_id = $company->industry;
      $industries = Industry::find_by_sql("SELECT * FROM industries WHERE id='{$industry_id}'");
      foreach ($industries as $industry): ?>
          <a href="<?php echo PATH ?>directory/search/?industry=<?php echo $industry->id; ?>"><?php  echo $industry->name; ?></a><?php  endforeach; ?>
</div>
    
   
    <?php endforeach;?>
    </div><?php //end of Botswana Pane ?>
    <div class="tab-pane" id="namibia-added">
        <?php
            $companies = Company::find_by_sql("SELECT * FROM companies WHERE country='na' ORDER BY created DESC LIMIT 20");
            foreach ($companies as $company): ?>

<div class="featured"  style="width: 300px;margin: 2px;">
      <div style="width: 50px; height: 50px;float: left; margin: 2px;">
        <img src="<?php echo PATH ?>images/logos/<?php echo $company->logo; ?>" />
      </div>
      <a href="<?php echo PATH; ?><?php echo code_to_country($company->country); ?>/directory/<?php echo $company->system;?>"><?php echo $company->name; ?></a></br>
          
      <?php $city_id = $company->city; 
        $city = City::find_by_sql("SELECT * FROM cities WHERE id='{$city_id}'");
        foreach ($city as $city): ?>
      <a href="<?php echo PATH ?>directory/search?city=<?php echo $city->id; ?>"> <?php echo $city->name; ?></a>
       <?php endforeach;
      ?>, <span class="capitalize"><?php echo code_to_country($company->country);?></span></br>
          <?php
          $industry_id = $company->industry;
      $industries = Industry::find_by_sql("SELECT * FROM industries WHERE id='{$industry_id}'");
      foreach ($industries as $industry): ?>
          <a href="<?php echo PATH ?>directory/search/?industry=<?php echo $industry->id; ?>"><?php  echo $industry->name; ?></a>
</div>
    <?php  endforeach; ?>
   
    <?php endforeach;?>
    </div><?php //end of Namibia Pane ?>
   <div class="tab-pane" id="zambia-added">  <?php
            $companies = Company::find_by_sql("SELECT * FROM companies WHERE country='zm' ORDER BY created DESC LIMIT 20");
            foreach ($companies as $company): ?>

<div class="featured"  style="width: 300px;margin: 2px;">
      <div style="width: 50px; height: 50px;float: left; margin: 2px;">
        <img src="<?php echo PATH ?>images/logos/<?php echo $company->logo; ?>" />
      </div>
      <a href="<?php echo PATH; ?><?php if($company->country == "bw"){ ?>botswana/<?php }elseif($company->country == "na"){ ?>namibia/<?php }elseif($company->country == "zm"){ ?>zambia/<?php }elseif($company->country == "zw"){ ?>zimbabwe/<?php } ?>directory/<?php echo $company->system;?>"><?php echo $company->name; ?></a></br>
          
      <?php $city_id = $company->city; 
        $city = City::find_by_sql("SELECT * FROM cities WHERE id='{$city_id}'");
        foreach ($city as $city): ?>
      <a href="<?php echo PATH ?>directory/search?city=<?php echo $city->id; ?>"> <?php echo $city->name; ?></a>
       <?php endforeach;
      ?>, 
        
        <?php if($company->country == "bw"){ ?>
          <a href="<?php echo PATH ?>botswana/directory/?country=bw">Botswana</a>
        <?php }elseif($company->country == "na"){ ?>
          <a href="<?php echo PATH ?>namibia/directory/?country=na">Namibia</a>
        <?php }elseif($company->country == "zm"){ ?>
          <a href="<?php echo PATH ?>zambia/directory/?country=zm">Zambia</a>
        <?php }elseif($company->country == "zw"){ ?>
          <a href="<?php echo PATH ?>zimbabwe/directory/?country=zw">Zimbabwe</a>
          <?php } ?></br>
          <?php
          $industry_id = $company->industry;
      $industries = Industry::find_by_sql("SELECT * FROM industries WHERE id='{$industry_id}'");
      foreach ($industries as $industry): ?>
          <a href="<?php echo PATH ?>directory/search/?industry=<?php echo $industry->id; ?>"><?php  echo $industry->name; ?></a>
</div>
    <?php  endforeach; ?>
   
    <?php endforeach;?></div><?php //end of Zambia Pane?>
   <div class="tab-pane" id="zimbabwe-added">  <?php
            $companies = Company::find_by_sql("SELECT * FROM companies WHERE country='zw' ORDER BY created LIMIT 20");
            foreach ($companies as $company): ?>

<div class="featured"  style="width: 300px;margin: 2px;">
      <div style="width: 50px; height: 50px;float: left; margin: 2px;">
        <img src="<?php echo PATH ?>images/logos/<?php echo $company->logo; ?>" />
      </div>
      <a href="<?php echo PATH; ?><?php if($company->country == "bw"){ ?>botswana/<?php }elseif($company->country == "na"){ ?>namibia/<?php }elseif($company->country == "zm"){ ?>zambia/<?php }elseif($company->country == "zw"){ ?>zimbabwe/<?php } ?>directory/<?php echo $company->system;?>"><?php echo $company->name; ?></a></br>
          
      <?php $city_id = $company->city; 
        $city = City::find_by_sql("SELECT * FROM cities WHERE id='{$city_id}'");
        foreach ($city as $city): ?>
      <a href="<?php echo PATH ?>directory/search?city=<?php echo $city->id; ?>"> <?php echo $city->name; ?></a>
       <?php endforeach;
      ?>, 
        
        <?php if($company->country == "bw"){ ?>
          <a href="<?php echo PATH ?>botswana/directory/">Botswana</a>
        <?php }elseif($company->country == "na"){ ?>
          <a href="<?php echo PATH ?>namibia/directory/">Namibia</a>
        <?php }elseif($company->country == "zm"){ ?>
          <a href="<?php echo PATH ?>zambia/directory/">Zambia</a>
        <?php }elseif($company->country == "zw"){ ?>
          <a href="<?php echo PATH ?>zimbabwe/directory/">Zimbabwe</a>
          <?php } ?></br>
          <?php
          $industry_id = $company->industry;
      $industries = Industry::find_by_sql("SELECT * FROM industries WHERE id='{$industry_id}'");
      foreach ($industries as $industry): ?>
          <a href="<?php echo PATH ?>directory/search/?industry=<?php echo $industry->id; ?>"><?php  echo $industry->name; ?></a>
</div>
    <?php  endforeach; ?>
   
    <?php endforeach;?></div><?php //end of Zimbabwe pane?>
  </div>
 </div> 
  </div>
</div>
<div style="clear: both;">
<?php include '../template/footer.php'; ?>
