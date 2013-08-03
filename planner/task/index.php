<?php include '../../system/initialize.php'; ?>
<?php include '../template/header.php'; ?>
<section class="main-content">
<?php
	$url = $_SERVER['REQUEST_URI'];
	$url = ltrim($url, '/');
	$url = rtrim($url, '/');
	$url = explode('/', $url);
	#print_r($url);
	$event_type = $url[3];
	$event_id = $url[4];

	if($event_type == 'wedding'){
		$type = 1;
	}elseif ($event_type == 'party'){
	 	$type = 2;
	}
	
	$task = Task::find_by_sql("SELECT * FROM tasks WHERE event_type='$type' AND id=$event_id");
	foreach ($task as $task):
?>
	<div style="width:95%;text-align: right;float:left;padding:10px;">
	<a class="btn btn-process" href="<?php echo PATH; ?>/planner/process/task/done/<?php echo $task->id; ?>" >Make as Complete</a>
	</div>
	<h4><?php echo $task->title?></h4>
	<h5>Due date: <?php echo $task->due_date; ?></h5>
	<p>
		<?php echo nl2br($task->body); ?>
	</p>
<?php endforeach;?>
</section>
<aside class="aside-300"><?php include '../template/sidebar.php';?></aside>