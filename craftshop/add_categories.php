<?php
  include '../system/initialize.php';
  if(isset($_POST['submit'])){
  $category = new Craft_Category();
  $category->name = $_POST['name'];
  $category->system = slug($_POST['name']);
  $category->create();
  }
?>

<form action="" method="post">
  <input type="text" name="name" />
  <input type="submit" name="submit" value="Submit" />
  
</form>