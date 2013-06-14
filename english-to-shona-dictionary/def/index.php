<?php include '../../system/initialize.php'; ?>
<?php include '../../template/header.php'; ?>
<aside class="aside-250 left" style="float:left;" ><?php include '../../template/sidebarLeft.php'; ?></aside>
<div style="width: 590px;float: left;margin-left: 5px;height: 600px;padding: 5px;">
 <?php
      $url = $_SERVER['REQUEST_URI'];
     
      $url = ltrim($url, '/');
      $url = rtrim($url, '/');
      $url = explode('/', $url);
      $system = $url[3];
      $word = Word::find_by_sql("SELECT * FROM dictionary WHERE system1='{$system}' OR system2='{$system}'");
      foreach($word as $word): ?>
  <div class="definition">
       <h1><span class="capitalize"><?php echo $word->word2; ?></span> in Shona</h1>
       <h2><span class="capitalize orange"><?php echo $word->word1; ?></span></h2>
  </div>     
  <div class="definition">
    <h2>Usage</h2>
    <table class="table">
    <?php
      $word_id = $word->id;
      $use = Usage::find_by_sql("SELECT * FROM dictionary_usage WHERE word_id='{$word_id}'");
      foreach($use as $use): ?>
    <tr>
      <td><?php echo $use->english_usage; ?></td>
      <td><?php echo $use->shona_usage; ?></td>
    </tr>
    <?php endforeach; ?>
      </table>
  </div>
      <?php endforeach; ?>
</div>
<aside class="aside-160 right"><?php include '../../template/sidebarRight.php'; ?></aside>
<?php include '../../template/footer.php'; ?>
?>
