<ul class="nav nav-stacked nav-tabs">
  <?php
    $category = Craft_Category::find_all();
    foreach($category as $category):
  ?>
  <li><a href="<?php echo PATH ?><?php if($url[1] != 'craftshop'){ ?><?php echo $url[1] ?>/<?php } ?>craftshop/category/<?php echo $category->system ?>"><?php echo $category->name ?></a></li>
  <?php endforeach; ?>
</ul>