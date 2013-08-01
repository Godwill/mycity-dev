<div class="siteShare">
    <div id="siteSearch">
<gcse:searchbox-only></gcse:searchbox-only>
            </div>
    </div><!-- End of Site Share -->

    <div class="ad2">
      <script type="text/javascript">
var uri = 'http://imp.tradedoubler.com/imp?type(js)pool(478129)a(2113950)' + new String (Math.random()).substring (2, 11);
document.write('<sc'+'ript type="text/javascript" src="'+uri+'" charset="ISO-8859-1"></sc'+'ript>');
</script>
    </div><!-- End of Ad2 -->


<div class="follow">
    <h4>Follow Us On Social Media</h4>

    <ul class=social clearfix">
    <li><a href="#" class="facebook-soc">Facebook</a></li>
    <li><a href="#" class="twitter-soc">Twitter</a></li>
    <li><a href="#" class="googleplus-soc">Google+</a></li>
    </ul>
</div>

<div class="" style="clear: both;"></div> <!--Empty div to to correct clearfix hack-->
<hr class="line"/>
<div class="search">
    <h4>Search</h4>

    <form class="form-search">
        <input type="text" class="input-medium search-query">
        <button type="submit" class="btn">Search</button>
    </form>
</div>


<!-- <div class="ad2">
     <h2>Archives</h2>
 </div><!-- End of Archives -->

    <div id="mostRead">
        <h3>Popular Posts</h3>
         <?php
         $sql = "SELECT * FROM articles ORDER BY created ASC LIMIT 5";
         $articles = Article::find_by_sql($sql);
         foreach($articles as $articles):
          ?>
      	<div id="mostReadArticles">
                	<div class="small2v1">
                        <?php 
                              $cat = $articles->category;
                              $sql = "SELECT * FROM categories WHERE id='{$cat}'";
                              $category = Category::find_by_sql($sql);
                              foreach ($category as $category):
                        ?>
                      <a href="<?php echo PATH ?>magazine/browse/<?php echo $category->id;?>/<?php echo $category->system ?>"><?php echo $category->name; ?></a> 
                       | Comments <fb:comments-count href=<?php echo PATH ?>magazine/<?php echo date('Y', $articles->created);?>/<?php echo date('m', $articles->created);?>/<?php echo date('d', $articles->created);?>/<?php echo $articles->system; ?>></fb:comments-count>
                   <?php endforeach; ?>
                    </div>

            <div class="mostReadPic">
            	<img src="<?php echo PATH ?>images/magazine/<?php echo $articles->picture;?>" width="125" height="78"/>
             </div>
            <div class="mostReadTitle">
              <a href="<?php echo PATH ?>magazine/<?php echo date('Y', $articles->created);?>/<?php echo date('m', $articles->created);?>/<?php echo date('d', $articles->created);?>/<?php echo $articles->system; ?>"/>
		   <?php echo $articles->title; ?>
                </a>
            </div>
        </div>
    <?php endforeach; ?>
    </div><!-- End of most Read -->

    <!--<div id="news">
         <h2>News and Events</h2>
    </div>-->
    <div class="ad2">
      <script type="text/javascript"><!--
google_ad_client = "ca-pub-6137026230943940";
/* SeeMyCity Magazine */
google_ad_slot = "2327124215";
google_ad_width = 300;
google_ad_height = 250;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
    </div><!-- End of Ad2 -->

    <div class="ad2">
      
    </div>
    <div class="ad2"><a href="http://www.tripleclicks.com/12481571">
<img src="http://www.sfimg.com/Images/Banners/banner429.jpg" border="0"/ ></a>
         <h4>Article Tags</h4>
        <ul class="nav nav-pills">
         <?php 
	$sql = "SELECT * FROM sub_categories";
	$topics = Category::find_by_sql($sql);
	foreach($topics as $topic):
?>
        <li class="active"><a href="<?php echo PATH ?>magazine/browse/?q=<?php echo $topic->id;?>"><?php echo $topic->name;?></a></li>

        <!--	<span style="font-size:--><?php //echo rand(11, 28);?><!--px"><a href="--><?php //echo PATH ?><!--magazine/browse/?q=--><?php //echo $topic->id;?><!--">--><?php //echo $topic->name;?><!--</a></span>-->
<?php endforeach;?>


        </ul>
    </div>

