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
                        <ul class="thumbnails">
                            <li class="span3" style="width: 260px;">
                                <div class="thumbnail">
                                    <img src="./assets/img/test.jpg" style="height: 120px;">
                                    <h4>iOS 7: Apple’s new design is no longer about making it work, and that’s too bad</h4>
                                    <small>I have been trying to like iOS 7. Really. I watched the videos, played with it on several iPhones, and last night I even installed it on my iPad (which was released yesterday). But I just can’t do it. It has to be said; iOS 7 is just not an improvement over iOS 6.</small>
                                    <button class="btn btn-primary" style="margin-left:70px;">Read More</button>
                                </div>
                            </li>

                            <li class="span3" style="width: 260px;">
                                <div class="thumbnail">
                                    <img src="./assets/img/test.jpg" style="height: 120px;">
                                    <h4>iOS 7: Apple’s new design is no longer about making it work, and that’s too bad</h4>
                                    <small>I have been trying to like iOS 7. Really. I watched the videos, played with it on several iPhones, and last night I even installed it on my iPad (which was released yesterday). But I just can’t do it. It has to be said; iOS 7 is just not an improvement over iOS 6.</small>
                                    <button class="btn btn-primary" style="margin-left:70px;">Read More</button>
                                </div>
                            </li>

                        <li class="span3" style="width: 260px;">
                            <div class="thumbnail">
                                <img src="./assets/img/test.jpg" style="height: 120px;">
                                <h4>iOS 7: Apple’s new design is no longer about making it work, and that’s too bad</h4>
                                <small>I have been trying to like iOS 7. Really. I watched the videos, played with it on several iPhones, and last night I even installed it on my iPad (which was released yesterday). But I just can’t do it. It has to be said; iOS 7 is just not an improvement over iOS 6.</small>
                                <button class="btn btn-primary" style="margin-left:70px;">Read More</button>
                            </div>
                        </li>
                    </ul>
                </div>
                </div>

                <div class="row-fluid">

                    <div class="article_container span">
                        <ul class="thumbnails">
                            <li class="span3" style="width: 260px;">
                                <div class="thumbnail">
                                    <img src="./assets/img/test.jpg" style="height: 120px;">
                                    <h4>iOS 7: Apple’s new design is no longer about making it work, and that’s too bad</h4>
                                    <small>I have been trying to like iOS 7. Really. I watched the videos, played with it on several iPhones, and last night I even installed it on my iPad (which was released yesterday). But I just can’t do it. It has to be said; iOS 7 is just not an improvement over iOS 6.</small>
                                    <button class="btn btn-primary" style="margin-left:70px;">Read More</button>
                                </div>
                            </li>

                            <li class="span3" style="width: 260px;">
                                <div class="thumbnail">
                                    <img src="./assets/img/test.jpg" style="height: 120px;">
                                    <h4>iOS 7: Apple’s new design is no longer about making it work, and that’s too bad</h4>
                                    <small>I have been trying to like iOS 7. Really. I watched the videos, played with it on several iPhones, and last night I even installed it on my iPad (which was released yesterday). But I just can’t do it. It has to be said; iOS 7 is just not an improvement over iOS 6.</small>
                                    <button class="btn btn-primary" style="margin-left:70px;">Read More</button>
                                </div>
                            </li>

                            <li class="span3" style="width: 260px;">
                                <div class="thumbnail">
                                    <img src="./assets/img/test.jpg" style="height: 120px;">
                                    <h4>iOS 7: Apple’s new design is no longer about making it work, and that’s too bad</h4>
                                    <small>I have been trying to like iOS 7. Really. I watched the videos, played with it on several iPhones, and last night I even installed it on my iPad (which was released yesterday). But I just can’t do it. It has to be said; iOS 7 is just not an improvement over iOS 6.</small>
                                    <button class="btn btn-primary" style="margin-left:70px;">Read More</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <hr>

                <small>Page 1 of 6</small>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <i class="icon-chevron-left"></i> &nbsp; <i class="icon-chevron-right"></i>
<!--                --><?php
//                $stream = Stream::find_by_sql("SELECT * FROM stream ORDER BY created DESC");
//                foreach($stream as $stream):
//
//                    echo get_for_stream($stream->object_id, $stream->table);
//
//                endforeach;
//                ?>

            </ul>

        </div>

        <div class="span3"><!--Sidebar-->
            <?php include'template/sidebar-left.php';?>
        </div>
    </div>
</div>

<div class="clear"></div>
<footer>
  <?php include 'template/footer.php'; ?>
</footer>