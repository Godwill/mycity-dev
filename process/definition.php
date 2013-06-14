<?php include '../system/initialize.php';

if(isset($_POST['submit'])){
  $word = new Word();
  $word->def = $_POST['def'];
  $word->word1 = $_POST['word1'];
  $word->word2 = $_POST['word2'];
  $word->language = $_POST['language'];
  $word->system1 = slug($_POST['word1']);
  
}
