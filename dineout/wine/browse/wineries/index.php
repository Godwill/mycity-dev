<?php
    include '../../../../admin/includes/initialize.php';
    include '../../../header.php';
?>
<div class="aside-left aside-200"><?php include '../../categories.php'; ?></div>

<div class="main-content">
<?php
if(isset($_GET['q'])){
	$url = $_GET['q'];
	$url = rtrim($url, '/');
	$url = explode('/', $url);
	$system = $url[0];
         
     $vineyard = Winery::find_by_sql("SELECT * FROM vineyards WHERE system='{$system}' LIMIT 1");
        foreach ($vineyard as $vineyard):
        $vineyard_id = $vineyard->id;
        $sql = "SELECT * FROM wines WHERE vineyard='{$vineyard_id}'";
        ?>
  <header class="well">
  <div class="vineyard">
    <h3><span class="highlight"><?php echo $vineyard->name; ?></span></h3></br>
  <?php echo $vineyard->description; ?></br>
  <?php echo $vineyard->website; ?></br>
  <?php $city = $vineyard->place; 
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
  ?>
     
  </div> 
    </header>
  <?php
        endforeach;
	$wine = Wine::find_by_sql($sql);
	foreach($wine as $wine):
?>
  
      <?php 
          $vineyard_id = $wine->vineyard; 
          $vineyard = Winery::find_by_sql("SELECT * FROM vineyards WHERE id='{$vineyard_id}'");
          foreach($vineyard as $vineyard):
            
          endforeach;
      ?>
  
 <div class="wine-list-container">
   
    <div class="wine-list-pic"><img src="<?php echo PATH ?>images/eatout/wines/<?php echo $wine->picture; ?>"></div>
    <div class="wine-list-details">
      
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
         case '6':
           echo 'South Africa';
         break;
       }
      endforeach;
      ?> </div>
    </div>
  </div>
     <?php endforeach; ?>
<?php }else{ ?>
  list all wineries.
<?php } ?>
