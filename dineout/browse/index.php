<?php  include'../../system/initialize.php'?>
<?php  include'../template/header.php'?>
<div class="aside-left aside-200"><?php include '../template/sidebar-left.php'; ?></div>
<div class="main-content"> 
<?php
	$url = $_GET['q'];
	$url = rtrim($url, '/');
	$url = explode('/', $url);
	$type = $url[0];
?>

<?php
  $page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;
  $per_page = 10;
  
   $sql = "SELECT COUNT(*) FROM companies WHERE industry=12 AND type='{$type}'";
    global $database;
    $results = $database->query($sql);
    $num = $database->fetch_array($results);
    $total_count = array_shift($num);
  
  $pagination = new Pagination($page, $per_page, $total_count);
?>
  <div class="results">We found <?php echo $total_count ?> match<?php if($total_count > 1){ echo 'es';}?>!</div>
  
<?php 
  $sql = "SELECT * FROM companies";
    $sql .= " WHERE industry=12 AND type='{$type}' ";
    $sql .= "LIMIT {$per_page} ";
    $sql .= "OFFSET {$pagination->offset()}";

 $place = Company::find_by_sql($sql);
 foreach($place as $place):
?>
  <div class="featured">
      <h3><a href="<?php echo PATH ?>dineout/<?php echo $place->id; ?>/<?php echo $place->system; ?>"><?php echo $place->name; ?></a></h3>
      <div class="browseListPic">
        <a href="<?php echo PATH ?>dineout/<?php echo $place->id; ?>/<?php echo $place->system; ?>">
          <img src="<?php echo PATH ?>images/dineout/restaurant/<?php echo $place->logo; ?>">
        </a>
      </div>
   </div>
      <?php endforeach;?> 
      </div>
      <div class="aside-right aside-300"><?php include '../template/sidebar.php'; ?></div>
<?php  include'../template/footer.php'?>
