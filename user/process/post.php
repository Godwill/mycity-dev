<?php include'../../system/initialize.php'; ?>
<?php

if(!$session->is_logged_in()) {
  redirect_to("../dashboard/profile/?status=already-logged-in");
}

if(isset($_POST['submit'])){
  			$uid  = $session->user_id;
			$blog = new Article();
			$blog->title = $_POST['title'];
			$blog->body = $_POST['body'];
			$blog->author = $uid;
			$blog->created = time();
			$blog->system = slug($_POST['title']);
			if($blog->create()){
				redirect_to('../list-posts?status=101');
			}else{
				redirect_to('../new-post/?status=102');
			}
}else{
	redirect_to('../new-post/');
}