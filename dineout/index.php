<?php include '../system/initialize.php'; ?>
<?php include 'template/header.php'; ?>
<div class="aside-left aside-200"><?php include 'template/sidebar-left.php';?></div>

<div class="main-content">
  
  
    <?php
      $restaurant = Restaurant::find_by_sql("SELECT * FROM restaurant");
      foreach($restaurant as $restaurant):
        $company = Company::find_by_sql("SELECT * FROM companies WHERE id='{$restaurant->company_id}'");
        foreach($company as $company):
    ?>
    <div class="featured">
    
    <div class="featuredPic"><img src="<?php echo PATH ?>images/dineout/restaurant/<?php echo $company->logo; ?>" width="150" height="100" alt="<?php echo $company->name; ?> logo"/></div>
    <div class="featuredDetails">
      <h2><a href="<?php echo PATH ?><?php echo code_to_country($company->country) ?>/dineout/<?php echo $company->id; ?>/<?php echo $company->system; ?>"><?php echo $company->name; ?></a></h2>
      <ul>
        <li><?php if(!empty($company->address_line_1)){ ?><?php echo $company->address_line_1; ?>,<?php } ?> 
          <?php if(!empty($company->website)){ ?><?php echo $company->address_line_2; ?>, <?php } ?>
          <a href="<?php echo PATH; ?>dineout/city/<?php echo slug(get_city($company->city)); ?>"><?php echo get_city($company->city);?></a>, 
          <a href="<?php echo PATH ?>dineout/<?php echo code_to_country($company->country)?>"><span style="text-transform: capitalize;"><?php echo code_to_country($company->country); ?></span></a>
        </li>
        <li><?php echo get_category("restaurant_types", $company->type);?></li>
        <li><a href="<?php echo PATH ?>dineout/menus/<?php echo $company->id; ?>">Menu</a> 
          </li>
      </ul>
    </div>

      </div>
    <?php endforeach; ?>
    <?php endforeach; ?>

  <div class="ad1"></div>

  <!--<div class="featured">
    <h1>Meal Of The Day</h1>
  </div>
  <div class="featured">
    
  </div>
  <div class="featured"></div>-->
</div>
<div class="aside-right aside-300">
  <?php include 'template/sidebar.php'; ?>
</div>
<?php include 'template/footer.php'; ?>