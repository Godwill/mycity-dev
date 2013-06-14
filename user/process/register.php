<?php include'../../system/initialize.php'; ?>
<?php
    if(isset($_POST['submit'])){
      $pass = $_POST['password'];
      $agent = new User();
      $agent->fname = $_POST['fname'];
      $agent->lname = $_POST['lname'];
      $agent->email = $_POST['email'];
      $agent->password = Hash::create('sha256', $pass, HASH_KEY);
      $agent->created = time();
      $agent->role = 1;

      if($agent->create()){
        redirect_to("../dashboard/profile");
      }else{
        redirect_to("../register");    
      }
    }
?>