<?php

require_once(LIB_PATH.DS.'database.php');
//Check database errors..

function redirect_to($Location = NULL) {
	if ($Location!= NULL) {
		header ("Location: {$Location}");
		exit;
	}
}

function strip_zeros_from_date( $marked_string="" ) {
  // first remove the marked zeros
  $no_zeros = str_replace('*0', '', $marked_string);
  // then remove any remaining marks
  $cleaned_string = str_replace('*', '', $no_zeros);
  return $cleaned_string;
}

function output_message($message="") {
  if (!empty($message)) { 
    return "<p class=\"message\">{$message}</p>";
  } else {
    return "";
  }
}

function __autoload($class_name) {
	$class_name = strtolower($class_name);
  $path = LIB_PATH.DS."{$class_name}.php";
  if(file_exists($path)) {
    require_once($path);
  } else {
		die("The file {$class_name}.php could not be found.");
	}
}

function log_action($action, $message="") {
	$logfile = SITE_ROOT.DS.'logs'.DS.'log.txt';
	$new = file_exists($logfile) ? false : true;
  if($handle = fopen($logfile, 'a')) { // append
    $timestamp = strftime("%Y-%m-%d %H:%M:%S", time());
		$content = "{$timestamp} | {$action}: {$message}\n";
    fwrite($handle, $content);
    fclose($handle);
    if($new) { chmod($logfile, 0755); }
  } else {
    echo "Could not open log file for writing.";
  }
}

function datetime_to_text($datetime="") {
  $unixdatetime = strtotime($datetime);
  return strftime("%B %d, %Y at %I:%M %p", $unixdatetime);
}

function slug($str){
	$str = strtolower(trim($str));
	$str = preg_replace('/[^a-z0-9-]/', '-', $str);
	$str = preg_replace('/-+/', "-", $str);
	return $str;
}

function howMany($place_id="", $table){
            $sql = "SELECT COUNT(*) FROM {$table} WHERE place={$place_id}";
            global $database;
            $results = $database->query($sql);
            $num = $database->fetch_array($results);
            $total = array_shift($num);  
            
            return $total;
}

function restaurantTryOut($place, $action){
    $sql = "SELECT * FROM {$action} WHERE id={$place}";
    $results = Restaurant::find_by_sql($sql);
    foreach ($results as $results):
    echo $results->name;  
    endforeach;
}

function restaurant($place, $action){
    $sql = "SELECT * FROM {$action} WHERE id={$place}";
    $results = Restaurant::find_by_sql($sql);
    foreach ($results as $results):
    echo $results->name;  
    endforeach;
}

function wishlist($place, $action){
    $sql = "SELECT * FROM {$action} WHERE id={$place}";
    $results = Product::find_by_sql($sql);
    foreach ($results as $results):
    echo $results->name;  
    endforeach;
}

function menuList($type, $system){
 # switch ($type){
  #  case
  #}
 
  $sql = "SELECT * FROM menu WHERE place='{$system}' AND type='{$type}'";
	$menu = Menu::find_by_sql($sql);
	foreach($menu as $menu):
      echo "<div class=\"menu-container\">";
      echo "<div class=\"item-name\">" .$menu->name ."</div>"; 
      echo "<div class=\"menu-price\">N$ " .number_format($menu->price, 2). "</div>";
      echo "<div class=\"item-description\">". $menu->description. "</div>";
      echo "</div>";
     endforeach;
}


function get_country($country){
  if($country == "botswana"){
    return 'bw';
  }elseif($country == "namibia"){
    return 'na';
  }elseif($country == "zambia"){
    return 'zm';
  }elseif($country == "zimbabwe"){
    return 'zw';
  }
}

function code_to_country($code){
  if($code == "bw"){
    return 'botswana';
  }elseif($code == "na"){
    return 'namibia';
  }elseif($code == "zm"){
    return 'zambia';
  }elseif($code == "zw"){
    return 'zimbabwe';
  }
}

function get_city($city){
  $city = City::find_by_sql("SELECT * FROM cities WHERE id='{$city}' LIMIT 1");
  foreach($city as $city):
    return $city->name;
  endforeach;
}

function get_industry($industry){
  $industry = Industry::find_by_sql("SELECT * FROM industries WHERE id='{$industry}' LIMIT 1");
  foreach($industry as $industry):
    return $industry->name;
  endforeach;
}

function get_category($table, $id){
  global $database;
  $sql = "SELECT * FROM ".$table ." WHERE id='{$id}'";
  $result_set = $database->query($sql);
  $result = $database->fetch_array($result_set);
  return $result['name'];
}

function get_vineyard($id){
  $winery = Winery::find_by_sql("SELECT * FROM vineyards WHERE id='{$id}'");
  foreach($winery as $winery):
    return $winery->name;
  endforeach;
}

function get_for_stream($object_id, $table){
	global $database;
	$sql = "SELECT * FROM ".$table." WHERE id=".$object_id;
	$result_set = $database->query($sql);
	$result = $database->fetch_array($result_set);
if($table == 'articles'){
	  echo '<div class="featured">';
	  if(!empty($result['picture'])){
		echo '<div class="featuredPic"><img src="images/magazine/thumb/'.$result['picture'].'" width="70" height="70"></div>';
	}
	echo '<h3><a href="magazine/'.date('Y', $result['created']).'/'.date('m', $result['created']).'/'.date('d', $result['created']).'/'.$result['system'].'">' .$result['title']. '</a></h3>';
		  	echo '<p>'.substr($result['body'],0, 190).'....</p>';
	echo '</div>';

  }elseif($table == 'companies'){
  echo '<div class="featuredSmall">';
			 
		echo '<div class="featuredPic"><img src="images/logos/'.$result['logo'].'" width="70" height="70"></div>';

		  	echo '<h3><a href="'.code_to_country($result['country']).'/directory/'.$result['system'].'">' .$result['name']. '</a></h3>';
		  	echo '<p>'.substr($result['description'],0, 100).'</p>';
	echo '</div>';
  }elseif($table == 'restaurant'){
  	$sql = "SELECT * FROM companies WHERE id=".$object_id;
	$result_set = $database->query($sql);
	$res = $database->fetch_array($result_set);
  echo '<div class="featuredSmall">';
			 
		echo '<div class="featuredPic"><img src="images/logos/'.$res['logo'].'" width="70" height="70"></div>';

		  	echo '<h3><a href="'.code_to_country($res['country']).'/dineout/'.$res['id'].'/'.$res['system'].'">' .$res['name']. '</a></h3>';
		  	echo '<p>'.substr($res['description'],0, 100).'</p>';
	echo '</div>';
  }else{
echo '<div class="featuredSmall">';
			  if(!empty($result['picture'])){
		echo '<div class="featuredPic"><img src="images/dineout/wines/'.$result['picture'].'" width="70" height="70"></div>';
	}
		  	echo '<h3>' .$result['name']. '</h3>';
		  	echo '<p>'.substr($result['description'],0, 50).'</p>';
	echo '</div>';
  }
}











