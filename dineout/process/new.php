<?php
include '../../admin/includes/initialize.php';
include '../header.php';

if(isset($_POST['submit'])){
  
    if(!empty($_POST['accessibility'])){
    $accessibility = $_POST['accessibility'];
  }else{
    $accessibility = "";
  }
  
  if(!empty($_POST['payment_types_1'])){
    $payment1 = $_POST['payment_types_1'];
  }else{
    $payment1 = "";
  }
  
  if(!empty($_POST['payment_types_2'])){
    $payment2 = $_POST['payment_types_2'];
  }else{
    $payment2 = "";
  }
  
  if(!empty($_POST['payment_types_3'])){
    $payment3 = $_POST['payment_types_3'];
  }else{
    $payment3 = "";
  }
  
  if(!empty($_POST['payment_types_4'])){
    $payment4 = $_POST['payment_types_4'];
  }else{
    $payment4 = "";
  }
  
  if(!empty($_POST['payment_types_5'])){
    $payment5 = $_POST['payment_types_5'];
  }else{
    $payment5 = "";
  }
  
  
  if($_GET['action'] == "basic"){
    $place = new Restaurant();
    $place->name = $_POST['name'];
    $place->description = $_POST['description'];
    $place->type = $_POST['type'];
    $place->operating_hours = $_POST['operating_hours'];
    $place->payment_types = $payment1." ".$payment2." ".$payment3." ".$payment4." ".$payment5;
    $place->accessibility = $accessibility;
    $place->created = time();
    $place->system = slug($_POST['name']);
    $place->deliveries = $_POST['deleveries'];
    if($place->create()){
      $id = $database->insert_id();
      redirect_to("../action/?action=contacts&status=101&id={$id}");
    }  else {
      global $database;
      
      redirect_to("../action/?action=basic&status=102");
    }
  }
}  elseif ($_GET['action'] == "contacts"){
  if(isset ($_POST['update']) && isset ($_POST['id'])) {
  $id = $_POST['id'];
  $address1 = $_POST['address1'];
  $address2 = $_POST['address2'];
  $city = $_POST['city'];
  $country = $_POST['country'];
  $tel = $_POST['tel'];
  $fax = $_POST['fax'];
  $email = $_POST['email'];
  $website = $_POST['website'];
  
  $sql = "UPDATE companies SET 
	address1 = '{$address1}',
	address2 = '{$address2}',
	city = '{$city}',
	country = '{$country}',
     tel = '{$tel}',
     fax = '{$fax}',
     email = '{$email}',
     website = '{$website}',
     deliveries = '{$deliveries}'
     
     
	WHERE id = {$id}";
  global $database;
  $result = $database->query($sql);
		
		if ($database->affected_rows() == 1) {
			// Success
			ob_start(); 
			redirect_to("../action/?id={$id}&action=features");
		} else {
			// Failed

		ob_start();
		redirect_to("../action/?id={$id}&action=contacts");

		}
  }
}elseif ($_GET['action'] == "features"){
  if(isset ($_POST['features']) && isset ($_POST['id'])) {
    $id = $_POST['id'];
    $happy_hour = $_POST['happy_hour'];
    $internet = $_POST['internet'];
    $good_for_kids = $_POST['good_for_kids'];
    $good_for_groups = $_POST['good_for_groups'];
    $breakfast = $_POST['breakfast'];
    $lunch = $_POST['lunch'];
    $dinner = $_POST['dinner'];
    $reservations = $_POST['reservations'];
    $music = $_POST['music'];
    $take_out = $_POST['take_out'];
    $waiter_service = $_POST['waiter_service'];
    
    $sql = "UPDATE restaurant SET 
	happy_hour = '{$happy_hour}',
	internet = '{$internet}',
	good_for_kids = '{$good_for_kids}',
	good_for_groups = '{$good_for_groups}',
     breakfast = '{$breakfast}',
     lunch = '{$lunch}',
     dinner = '{$dinner}',
     reservations = '{$reservations}',
     music = '{$music}',
     take_out = '{$take_out}',
     waiter_service = '{$waiter_service}'
  
	WHERE id = {$id}";
  global $database;
  $result = $database->query($sql);
		
		if ($database->affected_rows() == 1) {
			// Success
			ob_start(); 
			redirect_to("../action/?id={$id}&action=logo");
		} else {
			// Failed

		ob_start();
		redirect_to("../action/?id={$id}&action=features");

		}
  }
}elseif ($_GET['action'] == "logo"){
  if(isset($_POST['logo'])){
    
  $sql = "UPDATE SET logo = '{$logo}' restaurant WHERE id = {$id}";
  global $database;
  $result = $database->query($sql);
  if ($database->affected_rows() == 1) {
			// Success
			ob_start(); 
			redirect_to("../action/?id={$id}&action=logo");
		} else {
			// Failed

		ob_start();
		redirect_to("../{$id}");

		}
  }
}elseif ($_GET['action'] == "menu") {
  echo 'process menu';
}
?>

