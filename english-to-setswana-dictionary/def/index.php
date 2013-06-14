<?php include '../../system/initialize.php'; ?>
<?php include '../../template/header.php'; ?>
<aside class="aside-250 left" style="float:left;" ><?php include '../../template/sidebarLeftTswana.php'; ?></aside>
<div style="width: 590px;float: left;margin-left: 5px;height: 600px;padding: 5px;">
 <?php
      $url = $_SERVER['REQUEST_URI'];
      #print_r($url);
      $url = ltrim($url, '/');
      $url = rtrim($url, '/');
      $url = explode('/', $url);
      $system = $url[3];
      $word = Word::find_by_sql("SELECT * FROM dictionary WHERE system1='{$system}' OR system2='{$system}' AND language=1 ");
      foreach($word as $word): ?>
  <div class="definition">
       <h1><span class="capitalize"><?php echo $word->word2; ?></span> in Setswana</h1>
       <h2><span class="capitalize orange"><?php echo $word->word1; ?></span></h2>
  </div>     
  <div class="definition">
      <?php echo $word->usage; ?>
  </div>
      <?php endforeach; ?>
</div>
<aside class="aside-160 right"><?php include '../../template/sidebarRight.php'; ?></aside>
<?php include '../../template/footer.php'; ?>
?>
