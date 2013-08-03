<?php	include '../../system/initialize.php'; 
	
	if(isset($_POST['submit'])){
		$wedding = new Wedding();
		$wedding->couple_name = $_POST['couple'];	
		$wedding->fiance_fname = $_POST['fname'];
		$wedding->fiance_lname = $_POST['lname'];	
		$wedding->country = 'bw';
		$wedding->city = $_POST['city'];	
		$wedding->province = $_POST['province'];	
		$wedding->location = $_POST['location'];	
		$wedding->wedding_date = $_POST['date'];	
		$wedding->type = $_POST['type'];	
		$wedding->color1 = $_POST['color1'];	
		$wedding->color2 = $_POST['color2'];	
		$wedding->color3 = $_POST['color3'];	
		$wedding->uid = $session->user_id;	
		$wedding->created = time();
		$wedding->id = $_POST['id'];
		$id = $_POST['id'];
		
		if($wedding->update($id)){
			redirect_to("../account/profile/events?status=101&done=updated");
		}else{
			redirect_to("../add/wedding?status=101");
		}
	}
	
	?>
	
	you are here