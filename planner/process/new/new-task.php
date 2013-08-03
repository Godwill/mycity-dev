<?php include '../../../system/initialize.php' ?>
<?php #if(!$session->is_logged_in()){ redirect_to('../../task/new'); }?>
<?php
  if(isset($_POST['submit'])){
    $task = new Task();
    $task->name = $_POST['name'];
    $task->description = $_POST['description'];
    $task->status = $_POST['status'];
    $task->created = time();
    $task->uid = 0;
    #$task->updated = $_POST['submit'];
    if($task->create()){
      redirect_to('../../dashboard?task=101');
    }else{
      redirect_to('../../task/new?task=102');
    }
            
  }  else {
  redirect_to('../../task/new');
  } 