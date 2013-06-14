<?php include'../system/initialize.php'; ?>
<?php 
    $url = $_GET['q'];
    $url = rtrim($url, '/');
    $url = explode('/', $url);
    if(!isset($url[1])) {
?> 
  <!--<div class="blog-header">
    <div class="blog-cover"><img src="<?php #echo PATH; ?>images/blog/cover/tawanike.jpg"/></div><?php #end of blog cover ?>
    <div class="profile-picture"></div><?php #end of profile picture ?> 
  </div><?php #end of blog header ?>-->
<?php
    $url = $_GET['q'];
    $url = rtrim($url, '/');
    $url = explode('/', $url);
    $system = $url[0];
    # articles with type 2 are blog posts
    $blog = Blogs::find_by_sql("SELECT * FROM blogs WHERE system='$system'");
    foreach ($blog as $blog):
?>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0 user-scalable=no" /> 
<meta name="description" content="<?php echo substr($blog->description, 0, 200); ?>" />
<meta name="keywords" content="<?php echo $article->tags;?>" />

<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@<?php echo $blog->twitter; ?>">
<meta name="twitter:domain" content="<?php echo PATH ?>">
<meta property="twitter:title" content="<?php echo $blog->name; ?> | See My City Blogs"/>
<meta property="twitter:image" content="<?php echo PATH ?>images/blogs/picture/<?php echo $blog->picture;?>" />
<meta property="twitter:description" content="<?php echo substr($blog->description,0, 200); ?>">

    
    <meta name="description" content="<?php echo substr($blog->description,0, 200); ?>" />
    <meta name="keywords" content="<?php echo $article->tags; ?>"/>

    <meta property="og:title" content="<?php echo $blog->name; ?> - See My City Blogs"/>
    <meta property="og:type" content="Website"/>
    <meta property="og:url" content="<?php echo PATH ?>blogs/<?php echo $blog->system; ?>/"/>
    <meta property="og:image" content="<?php echo PATH ?>images/blog/picture/<?php echo $blog->picture;?>"/>
    <meta property="og:site_name" content="See My City"/>
    <meta property="fb:admins" content="1017126200"/>
    <meta property="og:description" content="<?php echo substr($blog->description,0, 200); ?>"/>

  
<link href='http://fonts.googleapis.com/css?family=Ubuntu|Julius+Sans+One' rel='stylesheet' type='text/css'>
<link rel="canonical" href="<?php echo PATH ?>blogs/<?php echo $blog->system; ?>/" />

    <link href="<?php echo PATH ?>blogs/main.css" rel="stylesheet" type="text/css"/>

    <title><?php echo $blog->name; ?> :: See My City Blogs | Sharing - Inspiring - Educating.</title>

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
  <div class="page">
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
  <div class="logo">
    <h2>See My City</h2>
    <div class="search-form"></div>
  </div>
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
<div class="main-content">
      <nav>
          <ul>
              <li><a href="http://www.seemycity.net/">Home</a></li>
              <li><a href="http://www.seemycity.net/blogs/about/<?php echo $blog->system; ?>">About</a></li>
              <li><a href="http://www.seemycity.net/blogs/bloggers/">Bloggers</a></li>
              <li><a href="http://www.seemycity.net/blogs/">Blogs</a></li>
              <li><a href="http://www.seemycity.net/blogs/category">Categories</a></li>
              <li><a href="http://www.seemycity.net/blogs/latest">Posts</a></li>
          </ul>
      </nav>
<?php $uid = $blog->id;?>

   <div><?php echo '<h3> Posts by '. $blog->name. '</h3>'; ?></div>
   <section class="blog-body">
   <?php $articles = Article::find_by_sql("SELECT * FROM articles WHERE blog_id='$uid' AND type=2");
    foreach ($articles as $post): ?>

    <div class="featured">
      <?php if(!empty($post->picture)){ ?> <div class="featuredPic"><img src="<?php echo PATH ?>images/magazine/thumb/<?php echo $post->picture; ?>" /></div> <?php } ?>
      <div class="title"><h3><a href="<?php echo PATH; ?>blogs/<?php echo $url[0]; ?>/<?php echo $post->system; ?>"><?php echo $post->title; ?></a></h3></div>
      <p><?php echo substr($post->body,0, 200); ?></p>
    </div><?php #end of blog-posts ?>
       <?php endforeach; ?>
     </article><?php #end of article body ?>
</div><?php #end of main-content ?>
  <?php endforeach;?>




<?php }else{ ?>
  <?php 
    $system = $url[1];
# articles with type 2 are blog posts
    $articles = Article::find_by_sql("SELECT * FROM articles WHERE system='$system' AND type=2");
    foreach ($articles as $article): ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php    
    $blog_id = $article->blog_id;
    $blog = Blogs::find_by_sql("SELECT * FROM blogs WHERE id='$blog_id'");
    foreach ($blog as $blog):
?>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0 user-scalable=no" /> 
<meta name="description" content="<?php echo substr($article->body,0, 200); ?>" />
<meta name="keywords" content="<?php echo $article->tags;?>" />

<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@<?php echo $blog->twitter; ?>">
<meta name="twitter:domain" content="<?php echo PATH ?>">
<meta property="twitter:title" content="<?php echo $article->title; ?> | See My City Blogs"/>
<meta property="twitter:image" content="<?php echo PATH ?>images/magazine/thumb/<?php echo $article->picture;?>" />
<meta property="twitter:description" content="<?php echo substr($article->body,0, 200); ?>">

    
    <meta name="description" content="<?php echo substr($article->body,0, 200); ?>" />
    <meta name="keywords" content="<?php echo $article->tags; ?>"/>

    <meta property="og:title" content="<?php echo $article->title;?>  - See My City Blogs - <?php echo $blog->name; ?>"/>
    <meta property="og:type" content="Article"/>
    <meta property="og:url" content="<?php echo PATH ?>blogs/<?php echo $blog->system; ?>/<?php echo $article->system; ?>"/>
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

<link href='http://fonts.googleapis.com/css?family=Ubuntu|Julius+Sans+One' rel='stylesheet' type='text/css'>
<link rel="canonical" href="<?php echo PATH ?>blogs/<?php echo $blog->system; ?>/<?php echo $article->system; ?>" />

    <link href="<?php echo PATH ?>blogs/main.css" rel="stylesheet" type="text/css"/>
    
    <title><?php echo $article->title;?> by <?php echo $blog->name; ?> :: See My City Blogs | Sharing - Inspiring - Educating.</title>

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
  <div class="page">
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
  <div class="logo">
    <h2>See My City</h2>
    <div class="search-form"></div>
  </div>
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
<div class="main-content">


<div class="mobile-nav">
          <ul>
              <li><a href="http://www.seemycity.net/">Home</a></li>
              <li><a href="http://www.seemycity.net/blogs/about/<?php echo $blog->system; ?>">About</a></li>
              <li><a href="http://www.seemycity.net/blogs/author/<?php echo $article->uid; ?>/">Author</a></li>
              <li><a href="http://www.seemycity.net/blogs/<?php echo $blog->system; ?>">Posts</a></li>
          </ul>
      </div>

    <div class="small">
      <?php
          $category = Category::find_by_sql("SELECT * FROM categories WHERE id='{$article->category}'");
          foreach ($category as $category):
          echo $category->name;
          endforeach;
      ?>
    </div>
    <h1 class="article-title"><?php echo $article->title;?></h1>
<p class="small">Posted on <?php echo date('l d M Y', $article->created);?> By <?php $author = User::find_by_sql("SELECT * FROM users WHERE id='{$article->uid}'LIMIT 1");
      foreach($author as $author): ?><a href="<?php echo $author->about?>" target="_blank"><?php echo $author->full_name(); ?></a><?php endforeach; ?></p>

<article class="blog-body article-body ">
    
<div class="social-bar">
<div class="fb-like" data-href="<?php echo PATH ?>blogs/<?php echo $blog->system; ?>/<?php echo $article->system; ?>" data-send="false" data-layout="button_count" data-width="120" data-show-faces="false" data-font="segoe ui" data-action="recommend"></div>

<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo PATH ?>blogs/<?php echo $blog->system; ?>/<?php echo $article->system; ?>" data-lang="en">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

<script src="//platform.linkedin.com/in.js" type="text/javascript">
 lang: en_US
</script>
<script type="IN/Share" data-url="<?php echo PATH ?>blogs/<?php echo $blog->system; ?>/<?php echo $article->system; ?>" data-counter="right"></script>

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
</div>

  <?php if(!empty($article->picture)) { ?>
    <div class="articlePic"><img src="<?php echo PATH ?>images/magazine/thumb/<?php echo $article->picture;?>"></div>
 <?php } ?> 

  <?php echo nl2br($article->body);?>
</article>

  <section class="blog-aside">
    <div class="ad2">
      <script type="text/javascript"><!--
google_ad_client = "ca-pub-6137026230943940";
/* See My City sidebar */
google_ad_slot = "3864822224";
google_ad_width = 300;
google_ad_height = 250;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div
<div class="ad2">
<fb:recommendations 
  site="www.seemycity.net"
  app_id="273590589390170">
</fb:recommendations>
</div>


  </section>


<?php endforeach; ?>
<?php endforeach; ?>


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
</div><?php #end of main content ?>
<?php } ?>
<div style="clear:both"></div>
<?php include("../template/footer.php");?>