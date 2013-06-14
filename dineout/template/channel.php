<?php 
    require_once 'facebook.php';
    
    $facebook = new Facebook(array(
        'appId'  => '120763721271213',    //app id
        'secret' => 'ae6b9774a030ff8d260e1da9f687bcb7', // app secret
));
$user = $facebook->getUser(); 
if ($user) { // check if current user is authenticated
    try {
        // Proceed knowing you have a logged in user who's authenticated.
        $user_profile = $facebook->api('/me');  //get current user's profile information using open graph
        }
    catch(Exception $e){}
         
         
  try{
    $params = array(''=>'http://seemycity.net/venues/the-playhouse-theatre');
    $out = $facebook->api('/me/seemycityvenues:book','post',$params);
    
    }catch(Exception $e){
    echo $e->getMessage();
  }

    echo '<a href="'.$facebook->getLogoutUrl().'">Log Out</a>';

}else{
  $params=array(
      'scope' => 'email,publish_actions,read_stream,friends_likes',
      'redirect_uri' => 'http://localhost/seemycity/eatout/channel.php'
  );
  echo '<a href="'.$facebook->getLoginUrl($params).'">Log In</a>';
  
}
?>

<html>
  <head></head>
  <body>
  <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            appId      : '271609212950136', // App ID
            channelUrl : 'http://seemycity.net/channel.html', // Channel File
            status     : true, // check login status
            cookie     : true, // enable cookies to allow the server to access the session
            xfbml      : true  // parse XFBML
          });
          // Additional initialization code here
        };
        
        // Load the SDK Asynchronously
        (function(d){
           var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
           if (d.getElementById(id)) {return;}
           js = d.createElement('script'); js.id = id; js.async = true;
           js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
           ref.parentNode.insertBefore(js, ref);
         }(document));
      </script>
   
    
  </body>
</html>