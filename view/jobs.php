<?php  include'../system/initialize.php'?>
<?php
if(isset($_GET['q'])){
	$url = $_GET['q'];
	$url = rtrim($url, '/');
	$url = explode('/', $url);
    $system = $url[1];
     
	$sql = "SELECT * FROM vacancies WHERE id='{$system}'";
	$job = Vacancy::find_by_sql($sql);
	foreach($job as $job): ?>
		
	<?php endforeach ?>
<?php	
	}else{
		
	}
	
?>