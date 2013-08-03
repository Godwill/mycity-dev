<?php
		include '../../../system/initialize.php';
		
		//if is not logged in redirect to planner home page
		
		#if(!$session->is_logged_in()){ redirect_to('../../task/new'); }
		// otherwise process the new task.
 if(isset($_POST['submit'])){
    $task = new Appointment();
    $task->title = $_POST['title'];
    $task->contact = $_POST['contact'];
    $task->contact_number = $_POST['contact_number'];
    $task->date = $_POST['date'];
    $task->time = $_POST['time'];
    $task->reminder = $_POST['reminder'];
    $task->event_id = $event_id = $_POST['event_id'];
    $task->created = time();
    $task->event_type = $event_type = $_POST['event_type'];
    $task->location = $_POST['location'];
    $task->task_id = $_POST['task'];
    if($task->create()){
    	if ($event_type = 1) {
    		$event_type = 'wedding';
    		$event_id = $_POST['event_id'];
    	}else{
    		$event_type = 'party';
    		$event_id = $_POST['event_id'];
    	}
      redirect_to("../../$event_type/home/$event_id?apointment=101");
    }else{
      redirect_to('../../add/new/appointment.php?task=102');
    }
            
  }  else {
  redirect_to('../../task/new');
  } 