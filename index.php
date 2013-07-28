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
                   <li class="span3">
<!--                            <div style="width: 98%;float:left;padding:3px;border-bottom:2px solid orange;margin-bottom:5px;">-->
<!--	                            <div  class=" pull-left small" style="width: 200px;float:left">-->
<!--		                            --><?php //echo get_category('categories', $article->category); ?>
<!--		                        </div>    -->
<!--		                        <div class="pull-right small" style="float:right;">-->
<!--		                            --><?php //echo date('d F Y', $article->created); ?>
<!--		                        </div>-->
<!--                            </div> -->
                            <div class=""><img src="./assets/img/test.jpg" ></div>
                                <h3><?php echo $article->title; ?></h3>
                                <small>I have been trying to like iOS 7. Really. I watched the videos, played with it on several iPhones, and last night I even installed it on my iPad (which was released yesterday). But I just can’t do it.</small>
<!--                                    <div style="width: 98%;float:left;padding:3px;border-bottom:2px solid orange;border-top:2px solid orange;">-->
<!--	                                    <span class="small" >by Author Name Here</span>-->
<!--	                                    <div class="pull-right">-->
<!--	                                    <span class="small" >Read More</span>-->
<!--	                                    </div>-->
<!--                                    </div>-->

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
            <h1>Business</h1>
            <ul class="thumbnails">
                <?php
                $article = Article::find_by_sql("SELECT * FROM articles WHERE type !=2 AND category=5 ORDER BY created DESC LIMIT 3");
                foreach ($article as $article):
                ?>
                    <li class="span3">
                        <!--                            <div style="width: 98%;float:left;padding:3px;border-bottom:2px solid orange;margin-bottom:5px;">-->
                        <!--	                            <div  class=" pull-left small" style="width: 200px;float:left">-->
                        <!--		                            --><?php //echo get_category('categories', $article->category); ?>
                        <!--		                        </div>    -->
                        <!--		                        <div class="pull-right small" style="float:right;">-->
                        <!--		                            --><?php //echo date('d F Y', $article->created); ?>
                        <!--		                        </div>-->
                        <!--                            </div> -->
                        <div class=""><img src="./assets/img/test.jpg" ></div>
                        <h3><?php echo $article->title; ?></h3>
                        <small>I have been trying to like iOS 7. Really. I watched the videos, played with it on several iPhones, and last night I even installed it on my iPad (which was released yesterday). But I just can’t do it.</small>
                        <!--                                    <div style="width: 98%;float:left;padding:3px;border-bottom:2px solid orange;border-top:2px solid orange;">-->
                        <!--	                                    <span class="small" >by Author Name Here</span>-->
                        <!--	                                    <div class="pull-right">-->
                        <!--	                                    <span class="small" >Read More</span>-->
                        <!--	                                    </div>-->
                        <!--                                    </div>-->

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
            <h1>Technology</h1>
            <ul class="thumbnails">
                <?php
                $article = Article::find_by_sql("SELECT * FROM articles WHERE type !=2 AND category=8 ORDER BY created DESC LIMIT 3");
                foreach ($article as $article):
                    ?>
                    <li class="span3">
                        <!--                            <div style="width: 98%;float:left;padding:3px;border-bottom:2px solid orange;margin-bottom:5px;">-->
                        <!--	                            <div  class=" pull-left small" style="width: 200px;float:left">-->
                        <!--		                            --><?php //echo get_category('categories', $article->category); ?>
                        <!--		                        </div>    -->
                        <!--		                        <div class="pull-right small" style="float:right;">-->
                        <!--		                            --><?php //echo date('d F Y', $article->created); ?>
                        <!--		                        </div>-->
                        <!--                            </div> -->
                        <div class=""><img src="./assets/img/test.jpg" ></div>
                        <h3><?php echo $article->title; ?></h3>
                        <small>I have been trying to like iOS 7. Really. I watched the videos, played with it on several iPhones, and last night I even installed it on my iPad (which was released yesterday). But I just can’t do it.</small>
                        <!--                                    <div style="width: 98%;float:left;padding:3px;border-bottom:2px solid orange;border-top:2px solid orange;">-->
                        <!--	                                    <span class="small" >by Author Name Here</span>-->
                        <!--	                                    <div class="pull-right">-->
                        <!--	                                    <span class="small" >Read More</span>-->
                        <!--	                                    </div>-->
                        <!--                                    </div>-->

                    </li>
                <?php endforeach;?>
            </ul>
        </div>

        <hr>

        <small>Page 1 of 6</small>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <i class="icon-chevron-left"></i> &nbsp; <i class="icon-chevron-right"></i>
    </div>
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