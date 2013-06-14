  <div class="side-container">
    <ul class="nav nav-tabs nav-stacked">
    <?php 
      $category = Cuisine::find_by_sql("SELECT * FROM cuisines ORDER BY name ASC");
      foreach($category as $category): ?>
      <li><a href="<?php echo PATH ?>dineout/browse/<?php echo $category->id; ?>/<?php echo $category->system;?>"><?php   echo $category->name; ?></a></li>
     <?php endforeach; ?>
      </ul>
  </div>