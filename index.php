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

            <hr/>

            <ul  id="Grid">
                <?php
                $stream = Stream::find_by_sql("SELECT * FROM stream ORDER BY created DESC");
                foreach($stream as $stream):

                    echo get_for_stream($stream->object_id, $stream->table);

                endforeach;
                ?>

            </ul>

        </div>

        <div class="span3 aside-300"><!--Sidebar-->
            <?php include'template/sidebar-left.php';?>
        </div>
    </div>
</div>

<div class="clear"></div>
<footer>
  <?php include 'template/footer.php'; ?>
</footer>