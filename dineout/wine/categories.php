<div class="side-container">
  <ul class="nav nav-tabs nav-stacked">
     <li><a href="<?php echo PATH ?>feedback/wine">Feedback</a></li>
  </ul>
</div>
<div class="side-container">    
<ul class="nav nav-tabs nav-stacked">
      <li><a href="<?php echo PATH ?>dineout/wine/browse/red-wine">Red Wine</a></li>
      <li><a href="<?php echo PATH ?>dineout/wine/browse/white-wine">White Wine</a></li>
      <li><a href="<?php echo PATH ?>dineout/wine/browse/rose-wine">Rose Wine</a></li>
      <li><a href="<?php echo PATH ?>dineout/wine/browse/sparkling">Sparkling</a></li>
      <li><a href="<?php echo PATH ?>dineout/wine/browse/dessert">Dessert</a></li>
    </ul>
</div>      

<div class="side-container">
    <ul class="nav nav-tabs nav-stacked">
    <?php 
      $category = WineCategory::find_by_sql("SELECT * FROM wine_categories ORDER BY name ASC");
      foreach($category as $category): ?>
      <li><a href="<?php echo PATH ?>dineout/wine/browse/<?php echo $category->system;?>"><?php   echo $category->name; ?></a></li>
     <?php endforeach; ?>
      </ul>
  </div>

<div class="side-container">
  <ul class="nav nav-tabs nav-stacked">
     <li><a href="<?php echo PATH ?>dineout/wine/browse/wineries">Wineries</a></li>
     <?php 
        $vineyard = Winery::find_by_sql("SELECT * FROM vineyards WHERE featured=1");
        foreach($vineyard as $vineyard):
     ?>
     <li><a href="<?php echo PATH ?>dineout/wine/browse/wineries/<?php echo $vineyard->system; ?>"><?php echo $vineyard->name; ?></a></li>
     <?php endforeach; ?>
  </ul>
</div>

<div class="side-container">
  <ul class="nav nav-tabs nav-stacked">
     <li><a href="<?php echo PATH ?>dineout/wine/browse/vintage">Vintage</a></li>
     <li><a href="<?php echo PATH ?>dineout/wine/browse/origin">2012</a></li>
       <li><a href="<?php echo PATH ?>dineout/wine/browse/origin">2011</a></li>
     <li><a href="<?php echo PATH ?>dineout/wine/browse/origin">2010</a></li>
     <li><a href="<?php echo PATH ?>dineout/wine/browse/origin">2009</a></li>
     <li><a href="<?php echo PATH ?>dineout/wine/browse/origin">2008</a></li>
     <li><a href="<?php echo PATH ?>dineout/wine/browse/origin">2007</a></li>
     <li><a href="<?php echo PATH ?>dineout/wine/browse/origin">2006</a></li>
     <li><a href="<?php echo PATH ?>dineout/wine/browse/origin">2005</a></li>   
  </ul>
</div>

<div class="side-container">
  <ul class="nav nav-tabs nav-stacked">
     <li><a href="<?php echo PATH ?>dineout/wine/browse/origin">Origin</a></li>

  </ul>
</div>