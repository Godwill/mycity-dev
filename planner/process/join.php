<?php
include '../../system/initialize.php';

if ($_POST['submit']) {
	$user = new User();
	$user->fname = $fname = $_POST['fname'];
	$user->lname = $lname = $_POST['lname'];
	$user->email = $email = $_POST['email'];
	$pass = $_POST['password'];
	$user->password = Hash::create('sha256', $pass, HASH_KEY);
	$user->location =  $location = $_POST['location'];
	$user->created = time();
	$user->code = $random = rand(1234567890, 9999999999);
	$user->active = 0;

	if ($user->create()) {
		
		$to = $email;
		$subject = "Wedding Planner Botswana";
		$headers = "From: admin@seemycity.net";
		$server = "mail.seemycity.net";
		$body =<<<EMAILBODY
		
		
			Hie $fname $lname,
		
			Thank you for registering on Wedding Planner Botswana.
		
			Please confirm your account by clicking the link below or by copying it and pasting it onto your browser's address bar.
			
			http://www.seemycity.net/planner/activate/$random?ref=weddings 
			
			Please like our Facebook Page https://www.facebook.com/WeddingPlannerBotswana we would love to stay in touch with you.		
		
			Regards.
		
			Administrator
		
			Wedding Planner Botswana.
		
			If you have received this message in error please ignore it.
		
EMAILBODY;
			mail($to, $subject, $body, $headers );
		
		redirect_to("../account/login?status=101");
	}else {
		redirect_to("../account/register");
	}
	
}