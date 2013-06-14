<?php
    include '../../../system/initialize.php';
    include '../../template/header.php';
?>
<div class="aside-left aside-200"><?php include '../categories.php'; ?></div>

<div class="main-content">
<?php
if(isset($_GET['q'])){
	$url = $_GET['q'];
	$url = rtrim($url, '/');
	$url = explode('/', $url);
	$system = $url[0];
	$category = WineCategory::find_by_sql("SELECT * FROM wine_categories WHERE system='{$system}'");
	foreach($category as $category):
     $category_id = $category->id;
     
	$sql = "SELECT * FROM wines where type='{$category_id}'";
	$wine = Wine::find_by_sql($sql);
	foreach($wine as $wine):
?>
 <div class="wine-list-container">
    <div class="wine-list-pic"><img src="<?php echo PATH ?>images/eatout/wines/<?php echo $wine->picture; ?>"></div>
    <div class="wine-list-details">
      <div class="vineyard"><h3><?php echo $wine->vineyard; ?></h3></div>
      <div class="wine-name"><h3><a href="<?php echo PATH; ?>eatout/wine/<?php echo $wine->id; ?>"><?php echo $wine->name; ?></a></h3> </div>
      
      <div class="wine-item">Category: <?php 
          $type = $wine->type;
          $type = WineCategory::find_by_sql("SELECT * FROM wine_categories WHERE id='{$type}'");
          foreach ($type as $type):
            echo $type->name;
          endforeach;
      ?></div>
      <div class="wine-item">Vintage: <?php echo $wine->year; ?></div>
      <div class="wine-item">Alc: <?php echo $wine->alcohol; ?>&percnt; </div>
      <div class="wine-name">Origin: <?php 
      $city = $wine->origin;  
  $city = City::find_by_sql("SELECT * FROM cities WHERE id='{$city}'");
      foreach ($city as $city):?>
       <?php echo $city->name;
      endforeach;
      ?>, 
  <?php $country = $vineyard->country; 
  $country = City::find_by_sql("SELECT * FROM country WHERE id='{$country}'");
      foreach ($country as $country):?>
       <?php echo $country->name;
      endforeach;
      ?> </div>
    </div>
  </div>
   
     <?php endforeach; ?>
     <?php endforeach; ?>
<?php } ?>