<?php include 'system/initialize.php'; ?>
<?php include 'template/header.php'; ?>
<?php
  //if(!isset($_GET['country'])){$_GET['country'] = 'bw';}
?>
<div class="container-fluid">
    <div class="row-fluid">
<!--        <div class="heading">Featured Posts</div>-->
        <div class="span9 content-box"><!--Main content container-->
            <div class="row-fluid">
                <div class="span5">
                    <h3>Featured Posts</h3>
                </div>

                <div class="span2 view pull-right">
                    <h5><i class="icon-th"></i> Grid View</h5>
                </div>

                <div class="span2 view pull-right">
                    <h5><i class="icon-th-list"></i> List View</h5>
                </div>
            </div>

            <hr>

<ul  id="Grid">

         <div class="row-fluid">
                <div class="article_container span">
                    <h1>Fashion</h1>
                        <ul class="thumbnails">
                           <?php 
					$article = Article::find_by_sql("SELECT * FROM articles WHERE type !=2 AND category=1 ORDER BY created DESC LIMIT 3");
					foreach ($article as $article):
				?>
                            <li class="span3" style="width: 300px;">
                            <div style="padding:3px;border-bottom:2px solid orange"><?php echo get_category('categories', $article->category); ?> <div class="pull-right"><?php echo date('d F Y', $article->created); ?></div></div>
                                <div class="thumbnail"><img src="./assets/img/test.jpg" style="width:100%;height:150px;">
                                    <h4><?php echo $article->title; ?></h4>
                                    <small>I have been trying to like iOS 7. Really. I watched the videos, played with it on several iPhones, and last night I even installed it on my iPad (which was released yesterday). But I just can’t do it. It has to be said; iOS 7 is just not an improvement over iOS 6.</small>
                                    <button class="btn btn-primary" style="margin-left:70px;">Read More</button>
                                </div>
                            </li>
						<?php endforeach;?>
                    </ul>
                </div>
                         <hr>
         <small>Page 1 of 6</small>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <i class="icon-chevron-left"></i> &nbsp; <i class="icon-chevron-right"></i>
         </div>
         <div class="row-fluid">
                    <div class="article_container span">
                        <ul class="thumbnails">
                            <h1>Technology</h1>
                <?php 
					$article = Article::find_by_sql("SELECT * FROM articles WHERE type !=2 AND category=8 ORDER BY created DESC LIMIT 3");
					foreach ($article as $article):
				?>
                            <li class="span3" style="width: 300px;">
                                <div class="thumbnail">
                                    <img src="./assets/img/test.jpg" style="height: 120px;">
                                    <h4><?php echo $article->title; ?></h4>
                                    <small>I have been trying to like iOS 7. Really. I watched the videos, played with it on several iPhones, and last night I even installed it on my iPad (which was released yesterday). But I just can’t do it. It has to be said; iOS 7 is just not an improvement over iOS 6.</small>
                                    <button class="btn btn-primary" style="margin-left:70px;">Read More</button>
                                </div>
                            </li>
						<?php endforeach;?>
                        </ul>
                    </div><?php #end of article container ?>
                             <hr>
         <small>Page 1 of 6</small>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <i class="icon-chevron-left"></i> &nbsp; <i class="icon-chevron-right"></i>
         </div><?php #end of technology row ?>
         <div class="row-fluid">
                    <div class="article_container span">
                        <ul class="thumbnails">
                            <h1>Business</h1>
                <?php 
					$article = Article::find_by_sql("SELECT * FROM articles WHERE type !=2 AND category=5 ORDER BY created DESC LIMIT 3");
					foreach ($article as $article):
				?>
                            <li class="span4" style="width: 300px;">
                                <div class="thumbnail">
                                    <img src="./assets/img/test.jpg" style="height: 120px;"> </div>
                                    <h4><?php echo $article->title; ?></h4>
                                    <small>I have been trying to like iOS 7. Really. I watched the videos, played with it on several iPhones, and last night I even installed it on my iPad (which was released yesterday). But I just can’t do it. It has to be said; iOS 7 is just not an improvement over iOS 6.</small>
                                    <button class="btn btn-primary" style="margin-left:70px;">Read More</button>
                               
                            </li>
						<?php endforeach;?>
                        </ul>
                    </div><?php #end of article container ?>
        </div><?php #end of ---- row?>
         <hr>
         <small>Page 1 of 6</small>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <i class="icon-chevron-left"></i> &nbsp; <i class="icon-chevron-right"></i>
</ul>

</div><?php #end of main content?>

        <div class="span3"><!--Sidebar-->
            <?php include'template/sidebar-left.php';?>
        </div>
    </div>
</div><?php #end of container fluid ?>

<div class="clear"></div>
<footer>
  <?php include 'template/footer.php'; ?>
</footer>