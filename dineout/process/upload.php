Upload processing....
<?php
    include '../../admin/includes/initialize.php';
      
    
    $pic = new Picture();
    $pic->caption = $_POST['caption'];
    $pic->place = $_POST['place'];
    $pic->created = time();
    $pic->attach_file($_FILES['uploadfile']);
    if($pic->save()){
      redirect_to("../{$_POST['place']}/?status=success");
    }  else {
      $message = join("</br>", $pic->errors);
      
      
      //redirect_to("../{$_POST['place']}/?status=failed");
}
?>