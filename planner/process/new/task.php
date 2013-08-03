<?php
		include '../../../system/initialize.php';
		
		//if is not logged in redirect to planner home page
		
		#if(!$session->is_logged_in()){ redirect_to('../../task/new'); }
		// otherwise process the new task.
 if(isset($_POST['submit'])){
    $task = new Task();
    $task->title = $_POST['title'];
    $task->body = $_POST['body'];
    $task->category_id = $_POST['category_id'];
    $task->due_date = $_POST['due_date'];
    $task->reminder = $_POST['reminder'];
    $task->event_id = $event_id = $_POST['event_id'];
    $task->created = time();
    $task->event_type = $event_type = $_POST['event_type'];
    if($task->create()){
    	if ($event_type = 1) {
    		$event_type = 'wedding';
    		$event_id = $_POST['event_id'];
    	}else{
    		$event_type = 'party';
    		$event_id = $_POST['event_id'];
    	}
      redirect_to("../../$event_type/home/$event_id?task=101");
    }else{
      redirect_to('../../task/new?task=102');
    }
            
  }  else {
  redirect_to('../../task/new');
  } 