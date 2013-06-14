<?php include '../../admin/includes/initialize.php'; ?>
<?php include '../header.php'; ?>
<div class="aside-left aside-250">c</div>
<div class="main-content-770">
  <?php 
    if($_GET['action'] == "basic"){ ?>
  <h2>Basic Information</h2>
      <form action="../process/new.php?action=basic" method="post" class="form-horizontal">
        <label for="name">What is the name of your restaurant?</label>
          <input type="text" id="name" name="name" class="span7" >
          </p>
          <label for="type">What type of a restaurant do you own?</label>
            <select class="span6" name="type">
              <option value="">Select One</option>
              <?php 
                $type = RestaurantType::find_all();
                foreach ($type as $type): ?>
              <option value="<?php echo $type->id;?>"><?php echo $type->name;?></option>
              <?php  endforeach; ?>
            </select>
      </p>
          <label for="description">Tell us about your restaurant</label>
          <textarea name="description" id="description" class="span7"></textarea>
          
          <p>
            <p>Which payment options do you accept?</p>
            <label class="checkbox inline">Visa <input type="checkbox" name="payment_types_1" value="visa" class="inline"></label>
            <label class="checkbox inline">Master Card <input type="checkbox" name="payment_types_2" value="master" class="inline"></label>
            <label class="checkbox inline">Discovery <input type="checkbox" name="payment_types_3" value="discovery" class="inline"></label>
            <label class="checkbox inline">Diners <input type="checkbox" name="payment_types_4" value="diners" class="inline"></label>
            <label class="checkbox inline">American Express <input type="checkbox" name="payment_types_5" value="amex" class="inline"></label>
          </p>
          <p>
            <p>Do you have a wheelchair ramp at any of your entrances?</p>
            <label class="radio inline">Yes <input type="radio" name="accessibility" value="1" ></label>
            <label class="radio inline">No <input type="radio" name="accessibility" value="0"></label>
          </p>
          <p >
            <p>What are your operating hours?</p>
          <textarea name="operating_hours"></textarea>
          <p class="help-block">Please write different days and times on separate lines</p>
          </p>
          
          <legend></legend>
          <input type="submit" name="submit" class="btn btn-primary" value="Save Restaurant">
      </form>
   <?php }  elseif ($_GET['action'] == "contacts") { ?>
      <h2>Contact Details <?php echo $session->message; ?></h2>
      <form action="../process/new.php?action=contacts" method="post">
      <label for="address1">Address Line 1</label>
          <input type="text" name="address1" class="span6" id="address1">
          
          <label for="address2">Address Line 2</label>
          <input type="text" name="address2" class="span6" id="address2">
      <label for="city">City</label>
          <input type="text" name="city" class="span6" id="city">
          <label for="country">Country</label>
          <select name="country" class="span5">
            <option value="0">Select Country</option>
            <option value="bw">Botswana</option>
            <option value="">Lesotho</option>
            <option value="">Malawi</option>
            <option value="na">Namibia</option>
            <option value="za">South Africa</option>
            <option value="">Swaziland</option>
            <option value="zm">Zambia</option>
          </select>
          
          <label for="tel">What is your telephone number?</label>
          <input type="text" name="tel" class="span6" id="tel">
          
          <label for="fax">What is your fax number?</label>
          <input type="text" name="fax" class="span6" id="fax">
          
          <label for="email">What is your email address?</label>
          <input type="text" name="email" class="span6" id="email">
          
          <label for="website">What is your website URL?</label>
          <div class="input-prepend"><span class="add-on">www.</span><input type="text" name="website" class="span5" id="website"></div>
          
          <label for="deliveries">Do you do home deliveries?
          Yes <input type="radio" name="delivery" class="radio" id="1">
          No <input type="radio" name="delivery" class="radio" id="0">
          </label>
          
          <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
          
          <legend></legend>
          <input type="submit" name="update" class="btn btn-primary" value="Save Contact Details">
      </form>
      
   <?php }elseif ($_GET['action'] == "features") { ?>
      <h2>Restaurant Features</h2>
      <form action="../process/new.php?action=features" method="post">
          <label for="happy_hour">Do you have a happy hour or in-store special rate period? Please enter the time if your answer is yes.</label>
          <input type="text" name="happy_hour" class="span6" id="happy_hour" >
        
          <label for="">Do you provide internet connectivity? </label>
          <p>Yes <input type="radio" name="internet" class="" value="1">
           No <input type="radio" name="internet" class="" value="0"></p>
          
           <legend></legend>
           <label for="">Which meals do you serve?</label>
         <p> Breakfast <input type="checkbox" name="breakfast" class="" value="1">
          Lunch <input type="checkbox" name="lunch" class="" value="1">
          Dinner <input type="checkbox" name="dinner" class="" value="1">
          </p> 
           <legend></legend>
           <label for="">Do you provide internet connectivity? </label>
          Yes <input type="radio" name="internet" class="" value="1">
           No <input type="radio" name="internet" class="" value="0">
          
           <legend></legend>
           <label for="">Do you have a kids menu?</label>
          Yes <input type="radio" name="good_for_kids" class="" value="1">
           No <input type="radio" name="good_for_kids" class="" value="0">
            <legend></legend>
           <label for="">Is your restaurant ideal for groups?</label>
          Yes <input type="radio" name="good_for_groups" class="" value="1">
           No <input type="radio" name="good_for_groups" class="" value="0">
          <legend></legend>  
           <label for="">Can one make a reservation in advance?</label>
          Yes <input type="radio" name="reservations" class="" value="1">
           No <input type="radio" name="reservations" class="" value="0">
            <legend></legend>
           
           <label for="">Do you play music in your restaurant?</label>
          Yes <input type="radio" name="music" class="" value="1">
           No <input type="radio" name="music" class="" value="0">
           <legend></legend> 
           <label for="">Do you allow take out?</label>
          Yes <input type="radio" name="take_out" class="" value="1">
           No <input type="radio" name="take_out" class="" value="0">
           <legend></legend>
           <label for="">Do you have waiter service?</label>
          Yes <input type="radio" name="waiter_service" class="" value="1">
           No <input type="radio" name="waiter_service" class="" value="0">
           
           <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
          
      <legend></legend>
          <input type="submit" name="features" class="btn btn-primary" value="Save Contact Details">
      </form>
      
  <?php  }elseif ($_GET['action'] == "menu") { ?>
      <form action="../process/new.php?action=menu" method="post">
        <p>
          <label for="name">Title</lable></br>
          <input type="text" name="name" class="span6" id="name" />
        </p>
        <p>
          <lable for="description">Description</label></br>
          <textarea name="" class="span6"></textarea>
        </p>
        <p>
          <label for="type">Type</lable></br>
          <select name="type" id="type">
            <option value="starter">Starter</option>
            <option value="main-course">Main Course</option>
            <option value="dessert">Dessert</option>
            <option value="beverage">Beverage</option>
          </select>
        </p>
        <p>
          <label for="price">Price</label></br>
          <input type="text" name="price" id="price"/>
          </p>
          <input type="submit" name="menu" id="price" class="btn btn-primary"/>
      </form>
  <?php  }
  ?>
</div>

<?php include '../footer.php'; ?>
