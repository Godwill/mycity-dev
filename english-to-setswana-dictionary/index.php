<?php include '../system/initialize.php'; ?>
<?php include '../template/header.php'; ?>
<aside class="aside-250 left" style="float:left;" ><?php include '../template/tswana/sidebarLeft.php'; ?></aside>
<div style="width: 590px;float: left;margin-left: 5px;height: 600px;padding: 5px;">
  
  <form action="../process/definition.php" method="post">

  <h3>English Word</h3>
    <input type="text" name="word1" placeholder="Word One" class="span7" />
    <h3>Setswana Word</h3>
    <input type="text" name="word2" placeholder="Word Two" class="span7" />
    <input type="hidden" name="laguage" value="1"/>
    <textarea name="def" placeholder="Definition One" class="span7" rows="10"></textarea>
    <textarea name="usage" placeholder="Example Usage" class="span7" rows="5"></textarea>
    
  <!--  <select name="language">
      <option value="0">Select Language</option>
      <option value="0">Setswana</option>
      <option value="0">Shona</option>
      <option value="0">Oshivambo</option>
      <option value="0">Ndebele</option>
      <option value="0">Kalanga</option>
      <option value="0">Damara</option>
      <option value="0">Herero</option>
      <option value="0">English</option>
    </select> -->
    
   <!-- <textarea name="def1" placeholder="Definition One"></textarea>-->
    
    <div class="enter-language" style="margin: 10px;"><input type="submit" name="submit" value="Add New Definition" class="btn btn-primary" /></div>
    </form>
</div>
<aside class="aside-160 right"><?php include '../template/sidebarRight.php'; ?></aside>
<?php include '../template/footer.php'; ?>