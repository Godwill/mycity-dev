<?php	include '../../../system/initialize.php'; ?>
<?php include '../template/header.php'; ?>
	<?php
		$url = $_SERVER['REQUEST_URI'];
		$url = ltrim($url, '/');
		$url = rtrim($url, '/');
		$url = explode('/', $url);
		#print_r($url);
		$system = $url[4];
		
		$wedding = Wedding::find_by_sql("SELECT * FROM weddings WHERE id='$system'");
		foreach($wedding as $wedding):
	?>
<section class="front-main-content">
	<?php include '../../template/logged-in-left-sidebar.php'; ?>
	<div style="width:670px;float:right;height:auto;">
		<div class="task-container" style="text-align:right;">
		<a href="<?php echo PATH; ?>planner/add/appointment.php?q=<?php echo $wedding->id; ?>" class="btn btn-process" style="color:#ff3990;">Set Appointment</a>
		<a href="<?php echo PATH; ?>planner/add/task.php?q=<?php echo $wedding->id; ?>" class="btn btn-process" style="color:#ff3990;">Add Task</a>
		</div>
		<?php 
			$task = Task::find_by_sql("SELECT * FROM tasks WHERE event_type=1 AND event_id='$wedding->id'");
			foreach ($task as $task):
		?>
			<div class="task-container">
				<div style="width:100px;float:left;text-align:center;color:#ff3990;">
					<?php $time = explode('/', $task->due_date);?>	
					<h4>
						<?php echo $time[0]?></br>
						<?php switch ($time[1]){
							case '01':
								echo 'January';
							break;
							case '02':
								echo 'February';
							break;
							case '03':
								echo 'March';
							break;
							case '04':
								echo 'April';
							break;
							case '05':
								echo 'May';
							break;			
							case '06':
								echo 'June';
							break;
							case '07':
								echo 'July';
							break;
							case '08':
								echo 'August';
							break;
							case '09':
								echo 'September';
								break;
							case '10':
								echo 'October';
								break;
							case '11':
								echo 'November';
								break;
							case '12':
								echo 'December';
								break;
						}
						
						?>
					<h4>
				</div> 
				<div style="width:480px;float:left;padding-bottom:5px;"><a href="<?php echo PATH; ?>planner/task/wedding/<?php echo $task->id; ?>"><?php echo $task->title; ?></a></div> 
				<div style="width:120px;float:left;"><?php if($task->status == 0){ echo 'In Progress';} ?></div>
				<!-- <div style="width:360px;float:left;">Assigned to: </div> -->
				
				<div style="width:540px;float:left;">
				<h6>Suggested Vendors</h6>
				<?php 
					$vendor = Company::find_by_sql("SELECT * FROM companies WHERE type=2 AND category='$task->category_id;' LIMIT 18");
					foreach ($vendor as $vendor):
				?>
					
					<div class="small-logo"><img src="<?php echo IMGPATH ?>logos/<?php echo $vendor->logo; ?>" title="<?php echo $vendor->name; ?>"  alt="<?php echo $vendor->name; ?>"/></div>
				<?php endforeach; ?>
				</div>
			</div>
			<?php endforeach; ?>	
	</div>
		<div class="summary" ></div>
		
		
			<div class="summary"></div>
				<div class="summary"></div>
					<div class="summary"></div>
						<div class="summary"></div>
							<div class="summary"></div>
</section>

	<div style="width:300px;height:600px;background-color:green;float:right"></div>
<?php endforeach;?>
<div class="clear"></div>