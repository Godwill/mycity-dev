<?php include '../system/initialize.php'; ?>

  <?php 
      $url = $_SERVER['REQUEST_URI'];
      $url = ltrim($url, '/');
      $url = rtrim($url, '/');
      $url = explode('/', $url);
      #print_r($url[2]);
 if(isset($url[1])){
      if(isset($url[1]) && $url[1] == "directory"){
        View::render('companies');
      }elseif (isset($url[2]) && $url[2] == "news") {
        View::render('news');
      }elseif(isset($url[2]) && $url[2] == "magazine"){
        View::render('magazine');
      }elseif (isset($url[2]) && $url[2] == "venues") {
        View::render('venues');
      }elseif(isset($url[2]) && $url[2] == "events"){
        View::render('events');
      }elseif(isset($url[2]) && $url[2] == "dineout"){
        View::render('dineout');
      }elseif(isset($url[2]) && $url[2] == "pricecheck"){
        View::render('pricecheck');
      }elseif(isset($url[2]) && $url[2] == "hotels"){
        View::render('hotels');
      }elseif(isset($url[2]) && $url[2] == "weddings"){
        View::render('weddings');
      }elseif(isset($url[2]) && $url[2] == "offers"){
        View::render('offers');
      }elseif(isset($url[2]) && $url[2] == "cars"){
        View::render('cars');
      }elseif(isset($url[2]) && $url[2] == "recipes"){
        View::render('recipes');
      }else{
        echo 'url 2 isset but not defined</p>';
        print_r($url);
      }
  }else{
          $url = $_SERVER['REQUEST_URI'];
          $url = ltrim($url, '/');
          $url = rtrim($url, '/');
          $url = explode('/', $url);
          #print_r($url);
          
          
          include '../template/simple-header.php';?>
<div class="main-content">

<div class="top-posts divide">
  <h1>Most Popular Articles</h1>
  <ul>
    <?php
      $article = Article::find_by_sql("SELECT * FROM articles WHERE country='bw' ORDER BY created DESC LIMIT 5");
      foreach($article as $article):
    ?>
    <li><a href="<?php echo PATH ?>magazine/<?php echo date('Y', $article->created);?>/<?php echo date('m', $article->created);?>/<?php echo date('d', $article->created);?>/<?php echo $article->system; ?>">
      <?php echo $article->title; ?></a></li>
    <?php endforeach;  ?>
  </ul>
</div><?php #end of top posts ?>  
  <div class="featured-companies divide">
  <h1>Featured Companies</h1>
    <?php 
      $companies = Company::find_by_sql("SELECT * FROM companies WHERE featured=1 and country='bw' ORDER BY CREATED LIMIT 5");
      foreach($companies as $company):
    ?>
    <div class="front-list">
      <div class="front-list-pic">
        <img src="<?php echo PATH ?>images/logos/<?php echo $company->logo; ?>" style="width: 50px;height:50px;" />
      </div>
      <a href="<?php echo PATH; ?><?php echo code_to_country($company->country); ?>/directory/<?php echo $company->system; ?>">
        <?php echo $company->name; ?>
      </a>
    </div>
    <?php endforeach; ?>
</div><?php #end of featured companies ?>  
  <div class="vacancies divide">
 <h1>Restaurants In Botswana</h1>
  <ul>
    <?php
      $companies = Company::find_by_sql("SELECT * FROM companies WHERE industry=12 AND country='bw' ORDER BY CREATED LIMIT 10");
      foreach($companies as $company):      
    ?>
    <div class="front-list">
      <div class="front-list-pic">
        <img src="<?php echo PATH ?>images/dineout/restaurant/<?php echo $company->logo; ?>" style="width: 50px;height:50px;" />
      </div>
      <a href="<?php echo PATH; ?><?php echo code_to_country($company->country); ?>/dineout/<?php echo $company->id; ?>/<?php echo $company->system; ?>">
        <?php echo $company->name; ?></a></br>
        <a href="<?php echo PATH ?>"></a>
    </div>
    <?php endforeach; ?>
  </ul>
</div><?php #end of restaurants ?> 
  <div class="in-the-papers divide">
  <h1></h1>
  
</div><?php #end of in the papers?>
       <div class="ad1">
          <script type="text/javascript"><!--
              google_ad_client = "ca-pub-6137026230943940";
              /* SeeMyCity Article Footer */
              google_ad_slot = "0402426631";
              google_ad_width = 728;
              google_ad_height = 90;
              //-->
          </script>
          <script type="text/javascript"
          src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
          </script>
        </div>
</div><?php #end of main content?>
    <aside class="aside-300 right"><?php  include '../template/sidebar-left.php'; ?></aside>
         
    <?php  } ?>
    
<?php include '../template/footer.php'; ?>