<?php

class Session {
	
	private $logged_in=false;
	public $user_id;
	public $message;
     public $role;
     public $country;


     function __construct() {
		session_start();
		$this->check_message();
		$this->check_login();
    if($this->logged_in) {
      // actions to take right away if user is logged in
    } else {
      // actions to take right away if user is not logged in
    }
	}
	
  public function is_logged_in() {
    return $this->logged_in;
  }

	public function login($user) {
    // database should find user based on username/password
    if($user){
      $this->user_id = $_SESSION['myCityuid'] = $user->id;
      $this->role = $_SESSION['role'] = $user->role;
      $this->logged_in = true;
    }
  }
  
  public function country($country){
    $_SESSION['country'] = $country;
  }


  public function logout() {
    unset($_SESSION['myCityuid']);
    unset($_SESSION['role']);
    unset($this->user_id);
    unset($this->role);
    $this->logged_in = false;
  }

	public function message($msg="") {
	  if(!empty($msg)) {
	    // then this is "set message"
	    // make sure you understand why $this->message=$msg wouldn't work
	    $_SESSION['message'] = $msg;
	  } else {
	    // then this is "get message"
			return $this->message;
	  }
	}

	private function check_login() {
    if(isset($_SESSION['myCityuid'])) {
      $this->user_id = $_SESSION['myCityuid'];
      $this->logged_in = true;
    } else {
      unset($this->user_id);
      $this->logged_in = false;
    }
  }
  
	private function check_message() {
		// Is there a message stored in the session?
		if(isset($_SESSION['message'])) {
			// Add it as an attribute and erase the stored version
      $this->message = $_SESSION['message'];
      unset($_SESSION['message']);
    } else {
      $this->message = "";
    }
	}
	
}

$session = new Session();
$message = $session->message();

