<?php  include'../../admin/includes/initialize.php'?>
<?php
  if(isset($_POST['rid'])){
  $rid = $_POST['rid'];
  $uid = $session->user_id;
  
  $place = new Favorite();
  $place->rid = $rid;
  $place->uid = $uid;
  $place->created = time();
  if($place->create()){
    $restaurant = Restaurant::find_by_sql("SELECT * FROM restaurant WHERE id={$rid}");
    foreach($restaurant as $res):
      echo $res->name;
    endforeach;
  $credits = new Credit();
  $credits->credits = 1;
  $credits->action_id = $rid;
  $credits->uid = $uid;
  $credits->action = "Restaurant";
  $credits->created = time();
  $credits->create();
    
  }  else {
    echo 'Could not be added';
  }
  }
?>
