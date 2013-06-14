<?php
    include '../../../admin/includes/initialize.php';
    include '../../header.php';
?>
<div class="aside-left aside-200"><?php include '../categories.php'; ?></div>

<div class="main-content">
<?php
if(isset($_GET['q'])){
	$url = $_GET['q'];
	$url = rtrim($url, '/');
	$url = explode('/', $url);
	$system = $url[0];
     
	$category = WineCategory::find_by_sql("SELECT * FROM wine_categories where system='{$system}'");
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
      <div class="wine-name"><h3><?php echo $wine->name; ?></h3> </div>
      
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
       <?php echo $city->name; ?>, <?php
       switch($city->country){
         case 'za':
           echo 'South Africa';
         break;
       }
      endforeach;
      ?> </div>
    </div>
  </div>
   
     <?php endforeach; ?>
     <?php endforeach; ?>
<?php } ?>