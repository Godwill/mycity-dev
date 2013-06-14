<?php
    include '../../system/initialize.php';
    include '../template/header.php';
?>
<div class="aside-left aside-200"><?php include 'categories.php'; ?></div>

<div class="main-content">
<?php
if(isset($_GET['q'])){
	$url = $_GET['q'];
	$url = rtrim($url, '/');
	$url = explode('/', $url);
	$system = $url[0];
    
	$sql = "SELECT * FROM wines where id='{$system}'";
	$wine = Wine::find_by_sql($sql);
	foreach($wine as $wine):
?>
  <div class="wine-list-pic"><img src="<?php echo PATH ?>images/dineout/wines/<?php echo $wine->picture; ?>"></div>
  <h3><?php echo $wine->name; ?></h3>
  <div class="winery">  by <a href="<?php echo PATH ?>dineout/wine/winary/<?php echo slug($wine->vineyard); ?>"><?php echo $wine->vineyard; ?></a></div>
  <div class="wine-info"><?php echo $wine->description; ?></div>
       
<table class="table">
  <tr>
    <td>Vintage: <?php echo $wine->year; ?></td>
    <td>Bottle Size: <?php echo $wine->size; ?></td>
    <td>Colour: <?php echo $wine->color; ?></td>
  </tr>
  
  <tr>
    <td>Category: <?php 
          $type = $wine->type;
          $type = WineCategory::find_by_sql("SELECT * FROM wine_categories WHERE id='{$type}'");
          foreach ($type as $type):
            echo $type->name;
          endforeach;
      ?></td>
    <td>Origin: <?php echo get_city($wine->origin);?> </td>
    <td><?php echo $wine->bouquet; ?> </td>
  </tr>
  
  <tr>
    <td><?php echo $wine->palate; ?></td>
    <td><?php echo $wine->ph; ?></td>
    <td><?php echo $wine->rs; ?></td>
  </tr>
  
  <tr>
    <td><?php echo $wine->ta; ?></td>
    <td><?php echo $wine->va; ?></td>
  </tr>
  
  <tr>
    <td></td>
    <td></td>
  </tr>
</table>

     <?php endforeach; ?>
<?php } ?>