<?php include'../../system/initialize.php'; ?>
<?php

if($session->is_logged_in()) {
  redirect_to("../dashboard/profile/?status=already-logged-in");
}

if (isset($_POST['submit'])) { //this means the form has been submitted.

	$email = trim($_POST['email']);
	$pass = trim($_POST['password']);

	$found_user = User::authenticate($email, $pass);
	
	if ($found_user) {
		$session->login($found_user);
         redirect_to("../dashboard/profile/?status=101");
	}else{
		redirect_to("../login/?status=102");

	}
}else{ // form not submitted
	$email = "";
	$password ="";
}
?>