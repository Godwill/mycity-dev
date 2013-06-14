<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta property="og:title" content="See My City :: A Great Leader "/>
    <meta property="og:type" content="Article"/>
    <meta property="og:url" content="http://www.seemycity.net/magazine/article/1334/a-great-leader"/>
    <meta property="og:image" content="http://www.seemycity.net/images/magazine/great-leader.jpg"/>
    <meta property="og:site_name" content="See My City"/>
    <meta property="fb:admins" content="tawanike"/>
    <meta property="fb:app_id" content="271609212950136"/>
    <meta property="og:description" content="<p>One question people do not often ask or reflect upon while in a leadership position is, Am I a good leader? There are just two reasons why people do not ask this question, one because they simply d"/>

    <title>Facebook Action Crack Down</title>
    
    <script>
  function login(){
FB.getLoginStatus(function(r){ //check if user already authorized the app
     if(r.status === 'connected'){
            window.location.href = 'channel.php';
     }else{
        FB.login(function(response) { // opens the login dialog
                if(response.authResponse) { // check if user authorized the app
              //if (response.perms) {
                    window.location.href = 'channel.php';
            } else {
              // user is not logged in
              alert(response);
            }
     },{scope:'email,publish_actions'}); //permission required by the app
 }
});
}  
  </script>
    
  </head>
  <body>
 <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            appId      : '271609212950136', // App ID
            channelUrl : 'http://localhost/seemycity/eatout/channel.php', // Channel File
            status     : true, // check login status
            cookie     : true, // enable cookies to allow the server to access the session
            xfbml      : true,  // parse XFBML
            oauth      : true
          });
        };
        // Load the SDK Asynchronously
        (function(d){
           var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
           if (d.getElementById(id)) {return;}
           js = d.createElement('script'); js.id = id; js.async = true;
           js.src = "//connect.facebook.net/en_US/all.js";
           ref.parentNode.insertBefore(js, ref);
         }(document));
      </script> 
      <a href='#' onclick='login();'>Facebook Login</a>
  <!--
      <a class="twitter-timeline" href="https://twitter.com/tawanike" data-widget-id="243846318362066944">Tweets by @tawanike</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

-->



  </body>
</html>