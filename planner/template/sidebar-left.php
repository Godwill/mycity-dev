  <ul class="nav nav-tabs nav-stacked">
      <?php
          $url = $_SERVER['REQUEST_URI'];
          $url = ltrim($url, '/');
          $url = rtrim($url, '/');
          $url = explode('/', $url);
          #print_r($url);
        $category = Category::find_by_sql("SELECT * FROM wedding_categories");
        foreach ($category as $category):?>
          <li><a href="<?php echo PATH ?>planner/category/<?php echo $category->system; ?>"><?php echo $category->name; ?></a></li>
      <?php endforeach; ?>
  </ul>