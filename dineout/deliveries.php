<?php  include'../system/initialize.php'?>
<?php  include'template/header.php'?>

<div class="aside-left aside-200"><?php include 'template/sidebar-left.php'; ?></div>

<div class="main-content">
     <?php 
    $restaurants = Company::find_by_sql("SELECT * FROM companies WHERE industry=12");
    foreach($restaurants as $restaurant):
?>
    <div class="featured" >
       <h3><a href="<?php echo PATH ?>dineout/menus/<?php echo $restaurant->id; ?>" ><?php echo $restaurant->name; ?></a></h3>
      <img src="<?php echo PATH ?>images/dineout/restaurant/<?php echo $restaurant->logo; ?>" width="100" height="75" style="float: left;margin: 5px;"/>
      
      <div style="width: 78%;float: left;">
        <?php if(!empty($restaurant->tel)){?>
        <div class="item-name"><?php echo get_city($restaurant->city); ?></div>
        <div class="item-number"><?php echo $restaurant->tel; ?></div>
        <?php }
          $branch = Branch::find_by_sql("SELECT * FROM branches WHERE company_id='{$restaurant->id}' AND type='restaurant'");
          foreach($branch as $branch): ?>
          <div class="item-name"> <?php echo $branch->name; ?></div>
          <div class="item-number"><?php echo $branch->tel; ?></div>
        <?php endforeach;?>
      </div>
    </div>  
<?php endforeach;?>
</div>
<div class="aside-right aside-300"><?php include 'template/sidebar.php'; ?></div>
<?php  include'template/footer.php'?>
