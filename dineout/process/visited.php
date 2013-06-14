<?php  include'../../admin/includes/initialize.php'?>
<?php
  if(isset($_POST['place_id'])){
  $place_id = $_POST['place_id'];
  $uid = $session->user_id;
  
  $place = new Visited();
  $place->place = $place_id;
  $place->uid = $uid;
  $place->created = time();
  if($place->create()){
    $restaurant = Restaurant::find_by_sql("SELECT * FROM restaurant WHERE id={$place_id}");
    foreach($restaurant as $res):
      echo $res->name;
    endforeach;
  }  else {
    echo 'Could not be added';
  }
  }
?>