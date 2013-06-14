<?php

Class View {
  
  public function render($name){
    require '../view/'.$name.'.php';
  }
  
}
?>
