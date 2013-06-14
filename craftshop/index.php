<?php include '../system/initialize.php'; ?>
<?php include '../template/craftshop/header.php'; ?>
<section class="main-content-long">
  <?php
      $products = Craft_Product::find_by_sql("SELECT * FROM craft_products WHERE featured=1");
      foreach ($products as $product):
  ?>
  
    <div class="product-container">
        <h2><a href="<?php echo PATH ?><?php echo code_to_country($product->country); ?>/<?php echo $product->system ?>/<?php echo $product->id ?>"><?php echo $product->name; ?></a></h2>
        <a href="<?php echo PATH ?>product/<?php echo $product->system ?>"><img src="<?php echo PATH ?>images/craftshop/<?php echo $product->id; ?>.jpg" /></a>
        <h3>&pound; <?php echo number_format($product->price, 2); ?></h3>
        <p class="capitalize">Origin: <a href="<?php echo PATH ?><?php echo code_to_country($product->country); ?>/craftshop/"><?php echo code_to_country($product->country); ?></a></p>
    </div>
  
  <?php endforeach; ?>
</section>
<?php include '../template/footer.php'; ?>