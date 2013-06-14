<?php
include '../admin/includes/initialize.php';
    require_once 'facebook.php';
    $app_id = "120763721271213";
    $my_url ="http://localhost/seemycity/events";
    $app_secret="ae6b9774a030ff8d260e1da9f687bcb7";
    
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
    $id = $session->user_id;
    
try{
    $auth_url = "http://www.facebook.com/dialog/oauth?client_id="
    . $app_id . "&redirect_uri=" . urlencode($my_url)
    . "&scope=create_event,publish_stream,rsvp_event";
    echo("<script>top.location.href='" . $auth_url . "'</script>");
    
    $token_url = "https://graph.facebook.com/oauth/access_token?client_id="
. $app_id . "&redirect_uri=" . urlencode($my_url)
. "&client_secret=" . $app_secret
. "&grant_type=client_credentials";
$access_token = file_get_contents($token_url);

$event_data = array(
    'name'          => 'Event: ' . date("H:m:s"),
    'start_time'    => time() + 28*60*60,
    'end_time'      => time() + 28*60*60*2,
    'description'   => "Description of the event as it should appear on Facebook and the events page on website",
    'location'      => "Windhoek, Namibia",
    'owner'       => "{$user}"
);
$facebook->api('/me/events', 'POST', $event_data);
    
}
 catch (Exception $e){}
}