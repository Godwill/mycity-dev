<?php  include'../../system/initialize.php'?>
<?php  include'../template/header.php'?>

<div class="aside-left aside-200"><?php include '../template/sidebar-left.php'; ?></div>

<div class="main-content">
    <?php
  /*
   * Menu Code
   * 1 = Bevarages
   * 2 = Appetizers
   * 3 = Salads
   * 4 = Vegetarian
   * 5 = Pizzas
   * 6 = Desserts
   * 7 = Soups
   * 8 = Sides
   * 9 = Beef
   * 10 = Chicken
   * 11 = Wine
   * 12 = 
   * 13 = Burgers
   */
  ?>
  
 <?php
if(isset($_GET['q'])){
	$url = $_GET['q'];
	$url = rtrim($url, '/');
	$url = explode('/', $url);
	$system = $url[0];
?>
  <?php
    $rest = Company::find_by_sql("SELECT * FROM companies WHERE id='{$system}'");
    foreach ($rest as $rest):
      $type = $rest->type;
    endforeach;
  ?>
  <?php
    if($type == 13){
      
    $rest = Company::find_by_sql("SELECT * FROM companies WHERE id='{$system}'");
    foreach ($rest as $rest): ?>
    
    <div class="pizza-container">
    
      <div class="pizza-name"><h3><?php  echo $rest->name; ?> Menu</h3></div>
       <?php if($type == 13){?> 
      <div class="pizza-price">SMALL</div>
      <div class="pizza-price">MEDIUM</div>
      <div class="pizza-price">LARGE</div>
<?php } ?>
  <?php
  $rid = $rest->id;
    $item = Menu::find_by_sql("SELECT * FROM menu WHERE place='{$rid}'");
    foreach($item as $item):
  ?>
     
      
      <?php 
        if($item->price != 0){ ?>
      <div class="menu-container">
        <h5><?php
            $type = $item->type;
            if($type == 6){
              echo 'Dessert';
            }
        ?>
</h5>
      <?php echo "<div class=\"item-name\">" .$item->name ."</div>"; 
      echo "<div class=\"menu-price\">N$ " .number_format($item->price, 2). "</div>";
      echo "<div class=\"item-description\">". $item->description. "</div>";
      echo "</div>";
       }else{
        ?>
       <div class="pizza-item">
        <div class="pizza-name"><?php echo $item->name;?></div>
      <div class="pizza-price">N$ <?php echo $item->small;?></div>
      <div class="pizza-price">N$ <?php echo $item->medium;?></div>
      <div class="pizza-price">N$ <?php echo $item->large;?></div>
      <div class="item-description"><?php echo $item->description;?></div>
      </div>
      <?php } ?>
      
      <?php endforeach?>
    </div>

    
    
    
   <?php endforeach;  
    }else{
  ?>
<div class="menu-heading"><h3>Appetizers</h3></div>
<?php menuList(2, $system); ?>

   <div class="menu-heading"><h3>Beef </h3></div>
   <?php menuList(9, $system); ?>

   <div class="menu-heading"><h3>Chicken </h3></div>
   <?php menuList(10, $system); ?>

  <div class="menu-heading"><h3>Vegetarian </h3></div>
  <?php menuList(4, $system); ?>

  <div class="menu-heading"><h3>Soups</h3></div>
  <?php menuList(7, $system); ?>

  <div class="menu-heading"><h3>Sides</h3></div> 
  <?php menuList(8, $system); ?>

  <div class="menu-heading"><h3>Salads</h3></div>
  <?php menuList(3, $system); ?>

  <div class="menu-heading"><h3>Desserts</h3></div>
  <?php menuList(6, $system); ?>

  <div class="menu-heading"><h3>Beverages</h3></div>
  <?php menuList(1, $system); ?>

  <div class="menu-heading"><h3>Wine</h3></div>
  <?php menuList(11, $system); ?>

  <div class="menu-heading"><h3>Pizzas</h3></div>
  <?php menuList(5, $system); ?>

  <div class="menu-heading"><h3>Burgers</h3></div>
  <?php menuList(13, $system); ?>
  
  <?php }?>
<?php }else{?>

    <?php 
    $restaurants = Company::find_by_sql("SELECT * FROM companies WHERE industry=12");
    foreach($restaurants as $restaurant):
?>
    <div class="featured" >
       <h3><a href="<?php echo PATH ?>dineout/menus/<?php echo $restaurant->id; ?>" ><?php echo $restaurant->name; ?></a></h3>
      <img src="<?php echo PATH ?>images/dineout/restaurant/<?php echo $restaurant->logo; ?>" width="100" height="75" style="float: left;margin: 5px;"/>
      
      
    </div>  
<?php endforeach;?>
<?php } ?>
</div>
<div class="aside-right aside-300"><?php include '../template/sidebar.php'; ?></div>
<?php  include'../template/footer.php'?>
