  <ul class="nav nav-tabs nav-stacked">
      <?php
          $url = $_SERVER['REQUEST_URI'];
          $url = ltrim($url, '/');
          $url = rtrim($url, '/');
          $url = explode('/', $url);
          #print_r($url);
        $category = WP_Category::find_all();
        foreach ($category as $category):?>
          <li><a href="<?php echo PATH ?><?php if($url[1] != 'planner'){ ?><?php echo $url[1] ?>/<?php } ?>planner/category/<?php echo $category->system; ?>"><?php echo $category->name; ?></a></li>
      <?php endforeach; ?>
  </ul>