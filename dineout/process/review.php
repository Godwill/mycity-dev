<?php  include'../../admin/includes/initialize.php'?>
<?php
  if(isset($_POST['submit'])){
  $place_id = $_POST['place_id'];
  $uid = $session->user_id;
  $body = $_POST['body'];
  $rating = $_POST['rating'];
  
  $place = new Review();
  $place->place = $place_id;
  $place->uid = $uid;
  $place->created = time();
  $place->body = $body;
  $place->rating = $rating;
  if($place->create()){
    $restaurant = Restaurant::find_by_sql("SELECT * FROM restaurant WHERE id={$place_id}");
    foreach($restaurant as $res):
      $place_name = slug($res->name);
    endforeach;
    redirect_to("../{$place_id}/{$place_name}");
  }  else {
    echo 'Could not be added';
  }
  }
?>