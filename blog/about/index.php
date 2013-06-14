<?php include'../../system/initialize.php'; ?>
<?php 
    $url = $_GET['q'];
    $url = rtrim($url, '/');
    $url = explode('/', $url);
    $system = $url[0];
    
    if(empty($url[0])){ ?>

    <!DOCTYPE html>
<html lang="en">
  <head>
    
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0 user-scalable=no" /> 
<meta name="description" content="See My City Blogs brings together great minds from around the SADC region to share their views on topics of interests.
     Every blog post is an opportunity to lead a discussion in an area of interest." />
<meta name="keywords" content="botswana, africa, gaborone, francistown, maun, blog, bloggers" />

<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@MyCityPortal">
<meta name="twitter:domain" content="<?php echo PATH ?>">
<meta property="twitter:title" content="About See My City Blogs"/>
<meta property="twitter:image" content="<?php echo PATH ?>images/blog/picture/about.jpg" />
<meta property="twitter:description" content="About See My City Blogs | Sharing - Inspiring - Educating.">

    
    <meta property="og:title" content="About See My City Blogs"/>
    <meta property="og:type" content="Website"/>
    <meta property="og:url" content="<?php echo PATH ?>blogs/about/"/>
    <meta property="og:image" content="<?php echo PATH ?>images/blog/picture/about.jpg"/>
    <meta property="og:site_name" content="About See My City Blogs"/>
    <meta property="fb:admins" content="1017126200"/>
    <meta property="og:description" content="See My City Blogs brings together great minds from around the SADC region to share their views on topics of interests.
     Every blog post is an opportunity to lead a discussion in an area of interest. "/>

<link rel="canonical" href="http://www.seemycity.net/blogs/about/" />
<link rel="stylesheet" type="text/css" href="<?php echo PATH ?>assets/css/bootstrap.css"/>
    <link href="<?php echo PATH ?>blogs/main.css" rel="stylesheet" type="text/css"/>
    <title>About See My City Blogs | Sharing - Inspiring - Educating.</title>

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
              <li><a href="http://www.seemycity.net/magazine/latest/">About</a></li>
              <li><a href="http://www.seemycity.net/magazine/popular/">Author</a></li>
              <li><a href="http://www.seemycity.net/blog/">Posts</a></li>
          </ul>
      </div>
      <nav>
          <ul>
              <li><a href="http://www.seemycity.net/">Home</a></li>
              <li><a href="http://www.seemycity.net/blogs/about/<?php echo $blog->system; ?>">About</a></li>
              <li><a href="http://www.seemycity.net/blogs/bloggers/">Bloggers</a></li>
              <li><a href="http://www.seemycity.net/blogs/">Blogs</a></li>
              <li><a href="http://www.seemycity.net/blogs/category/">Categories</a></li>
              <li><a href="http://www.seemycity.net/blogs/latest/">Posts</a></li>
          </ul>
      </nav>

  <article class="blog-body">
  
  <h1>About See My City Blogs</h1>
  <p><div class="small">Sharing - Inspiring - Educating</div></p>





</article>
<aside class="blog-aside">
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
</aside>
</div><?php #end of main content ?>

<?php #end of page ?>

    <?php }

?>
  <?php 
    $blogs = Blogs::find_by_sql("SELECT * FROM blogs WHERE system='$system'");
    foreach ($blogs as $blog):
  ?>  
<!DOCTYPE html>
<html lang="en">
  <head>
    
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0 user-scalable=no" /> 
<meta name="description" content="<?php echo $blog->description;?>" />
<meta name="keywords" content="<?php echo $blog->keywords;?>, botswana, africa, gaborone, francistown, maun" />

<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@<?php echo $blog->twitter; ?>">
<meta name="twitter:domain" content="<?php echo PATH ?>">
<meta property="twitter:title" content="<?php echo $blog->name; ?> | See My City Blogs"/>
<meta property="twitter:image" content="<?php echo PATH ?>images/blog/picture/<?php echo $blog->picture;?>" />
<meta property="twitter:description" content="<?php echo $blog->name; ?> | See My City Blogs | <?php echo $blog->description;?>">

    
    <meta property="og:title" content="<?php echo $blog->name;?> :: See My City Blogs"/>
    <meta property="og:type" content="Website"/>
    <meta property="og:url" content="<?php echo PATH ?>blogs/about/<?php echo $blog->system;?>"/>
    <meta property="og:image" content="<?php echo PATH ?>images/blog/picture/<?php echo $blog->picture;?>"/>
    <meta property="og:site_name" content="<?php echo $blog->name;?> :: See My City Blogs"/>
    <meta property="fb:admins" content="1017126200"/>
    <meta property="og:description" content="<?php echo $blog->description;?>"/>

<link rel="canonical" href="http://www.seemycity.net/blogs/about/<?php echo $blog->system;?>" />
<link rel="stylesheet" type="text/css" href="<?php echo PATH ?>assets/css/bootstrap.css"/>
    <link href="<?php echo PATH ?>blogs/main.css" rel="stylesheet" type="text/css"/>
    <title><?php echo $blog->name;?> :: See My City Blogs | Sharing - Inspiring - Educating.</title>

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
<div class="blog-header">

		<div class="blog-cover"><img src="<?php echo PATH; ?>images/blog/picture/<?php echo $blog->picture;?>"/>
			<div class="blog-title"><h1><?php echo $blog->name; ?><h1></div>
		</div><?php #end of blog cover ?>
	</div><?php #end of blog header ?>
	<article class="blog-body">
		<?php echo $blog->description; ?>
	</article>

  <?php
      $blog_id = $blog->id;
      $posts = Article::find_by_sql("SELECT * FROM articles WHERE type=2 AND blog_id='$blog_id'");
      foreach ($post as $post):
  ?>
        <section class="blogs-container">
          <?php echo $post->title; ?>
        </section><?php #end of blog container ?>
  <?php endforeach; ?>

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
</div>
  </section>
	<?php endforeach;?>
</div><?php #end of main-content ?>
</div> <?php #end of page ?>