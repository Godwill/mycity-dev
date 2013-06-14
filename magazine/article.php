<?php include('../system/initialize.php');?>

<?php
  $url = $_GET['q'];
  $url = rtrim($url, '/');
  $url = explode('/', $url);

  if(isset($url[3])){ $system = $url[3]; }     
     
  if(isset($url[3])){
     
 $sql = "SELECT id, title, body, system, uid, category, created, section, picture FROM articles where system='{$system}' Limit 1";
  $article = Article::find_by_sql($sql);
  foreach($article as $article):
   
?>
<!DOCTYPE>
<html>

    <meta charset="utf-8" />
    <meta name="description" content="<?php echo substr($article->body,0, 200); ?>" />
    <meta name="keywords" content="<?php echo $article->tags; ?>"
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0 user-scalable=no" />
    <meta property="og:title" content="<?php echo $article->title;?>  - See My City Magazine"/>
    <meta property="og:type" content="Article"/>
    <meta property="og:url" content="<?php echo PATH ?>magazine/<?php echo date('Y', $article->created);?>/<?php echo date('m', $article->created);?>/<?php echo date('d', $article->created);?>/<?php echo $article->system; ?>"/>
    <meta property="og:image" content="<?php echo PATH ?>images/magazine/thumb/<?php echo $article->picture;?>"/>
    <meta property="og:site_name" content="See My City"/>
    <meta property="fb:admins" content="1017126200"/>
    <meta property="og:description" content="<?php echo substr($article->body,0, 200); ?>"/>
    <meta property="og:published_time" content="<?php echo date('Y-m-dTH:MZ', $article->created);?>"/>
    <meta property="og:author" content="<?php $author = User::find_by_sql("SELECT * FROM users WHERE id='{$article->uid}'LIMIT 1");
      foreach($author as $author): ?><?php echo $author->about?><?php endforeach; ?>"/>
    <meta property="og:section" content="   <?php
        $category = Category::find_by_sql("SELECT * FROM categories WHERE id='{$article->category}'");
        foreach ($category as $category):
        echo $category->name;
        endforeach;
    ?>"/>
    <meta property="og:tag" content="<?php echo $article->tags; ?>"/>


    <title><?php echo $article->title;?> - See My City Magazine</title>

    <link rel="canonical" href="<?php echo PATH ?>magazine/<?php echo date('Y', $article->created);?>/<?php echo date('m', $article->created);?>/<?php echo date('d', $article->created);?>/<?php echo $article->system; ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo PATH ?>assets/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo PATH ?>magazine/style.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo PATH ?>magazine/main.css"/>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-31936670-1']);
  _gaq.push(['_setDomainName', 'seemycity.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
    
<script>
  (function() {
    var cx = '006218292630359392158:upouc3qimvi';
    var gcse = document.createElement('script'); gcse.type = 'text/javascript'; gcse.async = true;
    gcse.src = (document.location.protocol == 'https' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(gcse, s);
  })();
</script>
    
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=273590589390170";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="page">
<div id="header">
  

  <div class="mobile-ad">
      <script type="text/javascript"><!--
      google_ad_client = "ca-pub-6137026230943940";
      /* My City Mobile */
      google_ad_slot = "6214124734";
      google_ad_width = 320;
      google_ad_height = 50;
      //-->
      </script>
      <script type="text/javascript"
      src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
      </script>
  </div>
  <div id="logo"><h2>See My City</h2></div>
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
      <navigation>
        <ul>
          <li><a href="<?php echo PATH ?>magazine/fashion">Fashion</a></li>
          <li><a href="<?php echo PATH ?>magazine/motoring">Motoring</a></li>
          <li><a href="<?php echo PATH ?>magazine/health-and-beauty">Health & Beauty</a></li>
          <li><a href="<?php echo PATH ?>magazine/travel">Travel</a></li>
          <li><a href="<?php echo PATH ?>magazine/lifestyle">Lifestyle</a></li>
          <li><a href="<?php echo PATH ?>magazine/business">Business</a></li>
          <li><a href="<?php echo PATH ?>magazine/technology">Technology</a></li>
        </ul>
      </navigation>

      <div class="mobile-nav">
        <ul>
            <li><a href="http://www.seemycity.net/">Home</a></li>
            <li><a href="http://www.seemycity.net/magazine/latest/">Latest</a></li>
            <li><a href="http://www.seemycity.net/magazine/popular/">Popular</a></li>
            <li><a href="http://www.seemycity.net/blogs/">Blogs</a></li>
        </ul>
      </div>

</div><!-- Header ends here -->
<div class="main-content">
  <div class="small">
      <?php
          $category = Category::find_by_sql("SELECT * FROM categories WHERE id='{$article->category}'");
          foreach ($category as $category):
          echo $category->name;
          endforeach;
      ?>
    </div>
    <h3><?php echo $article->title;?></h3>

    <p class="small">Posted on <?php echo date('l d M Y', $article->created);?> By <?php $author = User::find_by_sql("SELECT * FROM users WHERE id='{$article->uid}'LIMIT 1");
      foreach($author as $author): ?><a href="<?php echo $author->about?>" target="_blank"><?php echo $author->full_name(); ?></a><?php endforeach; ?></p>
<p>
<div class="fb-like" data-href="<?php echo PATH ?>magazine/<?php echo date('Y', $article->created);?>/<?php echo date('m', $article->created);?>/<?php echo date('d', $article->created);?>/<?php echo $article->system; ?>" data-send="false" data-layout="button_count" data-width="120" data-show-faces="false" data-font="segoe ui" data-action="recommend"></div>

<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo PATH ?>magazine/<?php echo date('Y', $article->created);?>/<?php echo date('m', $article->created);?>/<?php echo date('d', $article->created);?>/<?php echo $article->system; ?>" data-lang="en">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

<script src="//platform.linkedin.com/in.js" type="text/javascript">
 lang: en_US
</script>
<script type="IN/Share" data-url="<?php echo PATH ?>magazine/<?php echo date('Y', $article->created);?>/<?php echo date('m', $article->created);?>/<?php echo date('d', $article->created);?>/<?php echo $article->system; ?>" data-counter="right"></script>

<!-- Place this tag where you want the +1 button to render. -->
<div class="g-plusone" data-size="tall" data-annotation="inline" data-width="120"></div>

<!-- Place this tag after the last +1 button tag. -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
</p>

  <?php if(!empty($article->picture)){?>
<div class="articlePic">
  <img src="<?php echo PATH ?>images/magazine/thumb/<?php echo $article->picture;?>">
</div>
 <?php } ?> 

  <?php echo nl2br($article->body);?>
</p>
    <div class="mobile-ad">
      <script type="text/javascript"><!--
      google_ad_client = "ca-pub-6137026230943940";
      /* My City Mobile */
      google_ad_slot = "6214124734";
      google_ad_width = 320;
      google_ad_height = 50;
      //-->
      </script>
      <script type="text/javascript"
      src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
      </script>
  </div><?php #end of ad?>

 <div id="disqus_thread"></div>
    <script type="text/javascript">
        var disqus_shortname = 'seemycitynet'; 
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>

</div><!-- End of Main Content -->
 <div class="sidebar">
    <?php include("sidebar.php");?>
  </div>
</div><?php #end of main content?>


<?php endforeach; 
     }else{ ?>

<?php

} ?>
</div><?php #page ends here ?>

<div style="clear:both"></div>
<?php include("../template/footer.php");?>