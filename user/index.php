<?php include'../system/initialize.php'; ?>
<?php include'../template/header.php'; ?>
<aside class="aside-250 left"></aside>
<div style="width:430px;float: left;margin: 10px auto;padding: 10px;">
  <?php if($_GET['q'] == 'register'){ ?>
  <form action="process/register.php" method="POST" class="well" >
    <input type="text" name="fname" placeholder="First Name" class="span5" />
    <input type="text" name="lname" placeholder="Last Name" class="span5" />
    <input type="text" name="email" placeholder="Email Address" class="span5" />
    <input type="password" name="password" placeholder="Password" class="span5" /></br>
    <input type="submit" name="submit" value="Register" class="btn btn-primary" />
  </form>
  <?php }  elseif($_GET['q'] == 'login') { ?>
   <form action="process/login.php" method="POST" class="well" >
    <input type="text" name="email" placeholder="Email Address" class="span5" />
    <input type="password" name="password" placeholder="Password" class="span5" /></br>
    <input type="submit" name="submit" value="Sign In" class="btn btn-primary" />
  </form>
  <?php }?>
</div>
<aside class="aside-250 right"></aside>
<?php include'../template/footer.php'; ?>