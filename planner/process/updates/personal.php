<?php include '../../../system/initialize.php'; ?>
<?php include '../../template/header.php'; 

if (isset($_POST['submit'])) {
	$user = new User();
	$user->fname = $_POST['fname'];
	$user->lname = $_POST['lname'];
	$user->email = $_POST['email'];
	$user->location = $_POST['location'];
	$user->cell = $_POST['cell'];
	$user->date_of_birth = $_POST['birthday'];
	$user->id = $_POST['id'];
	$id = $_POST['id'];
	
	if($user->update($id)){
		redirect_to("../../account/?status=saved");
	}
}
