<div class="side-container">
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
 <div class="fb-activity" data-href="http://seemycity.net" data-app-id="273590589390170" data-action="seemycityapp:view,like,seemycityapp:compare" data-width="300" data-height="300" data-header="false" data-border-color="white" data-recommendations="true"></div> 
  
  

  
 <!-- <div class="side-container"><h3>Chef's Special of the Day</h3></div>
  
  <div class="side-container"><h3>Editor's Pick</h3></div>
  
  <div class="ad2"></div>
  
  <div class="side-container"><h3>Latest Reviews</h3></div> -->
  
  <div class="side-container"><h3>Site Stats</h3>
    <ul class="nav nav-tabs nav-stacked">
    <li>Listed restaurants:
    <?php
    $sql = "SELECT COUNT(*) FROM restaurant";
    global $database;
    $results = $database->query($sql);
    $num = $database->fetch_array($results);
   echo $total_count = array_shift($num);
    ?>
    </li>
    <!--<li>Number of reviews:
       <?php
    $sql = "SELECT COUNT(*) FROM reviews";
    global $database;
    $results = $database->query($sql);
    $num = $database->fetch_array($results);
    echo $total_count = array_shift($num);
    ?>
    </li> -->
  </ul>
  </div>
   </div>