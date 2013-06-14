<?php include'../../system/initialize.php'; ?>
<?php

if(!$session->is_logged_in()) {
  redirect_to("../login/?status=102");
}

if(isset($_POST['submit'])){

	$blog = new Blogs();
	$blog->name = $_POST['name'];
	$blog->created = time();
	$blog->uid = $session->user_id;
	$blog->system = slug($_POST['name']);
	$blog->category = $_POST['category'];
	$blog->description = $_POST['description'];
	$blog->tags = $_POST['tags'];
	$blog->facebook = $_POST['facebook'];
	$blog->twitter = $_POST['twitter'];
	$blog->pinterest = $_POST['pinterest'];
	if($blog->create()){
		redirect_to('../list-blogs');
	}else{
		redirect_to('../new-blog/?status=102');
	}

}else{
	redirect_to('../new-blog/');
}