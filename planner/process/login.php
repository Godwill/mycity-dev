<?php include'../../system/initialize.php'; ?>
<?php

if($session->is_logged_in()) {
  redirect_to("../account?status=already-logged-in");
}

if (isset($_POST['submit'])) { //this means the form has been submitted.

	$email = trim($_POST['email']);
	$pass = trim($_POST['password']);

	$found_user = User::authenticate($email, $pass);
	
	if ($found_user) {
		$session->login($found_user);
		$user_id = $session->user_id;
         redirect_to("../account/?status=101");
	}else{
		redirect_to("../account/login/?status=102");

	}
}else{ // form not submitted
	echo 'Error Here';
	$email = "";
	$password ="";
}
?>