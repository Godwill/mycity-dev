<?php include '../../../system/initialize.php' ?>
<?php #if(!$session->is_logged_in()){ redirect_to('../../task/new'); }?>
<?php
  if(isset($_POST['submit'])){
     $id = $_GET['q'];
    $task = new Task();
    $task->id = $id;
    $task->name = $_POST['name'];
    $task->description = $_POST['description'];
    $task->updated = time();
    $task->status = $_POST['status'];
    $task->uid = $session->user_id;
   
    if($task->update($id)){
      redirect_to('../../dashboard/to-do');
    }else{
      
    }
            
  }  else {
  redirect_to('../../task/new');
  } 