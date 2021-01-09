<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="stylecheckout.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
  <form action="db_checkout.php" method="post">
  <div class="topnav">

  <b class="active" href="#home">Hello, <?php echo $_SESSION['name']; ?></b>
  <a href="home1.php">Logout</a>
  <a href="contact_us.php">Contact</a>
  <a href="buyer_table.php">Buyer Table</a>
</div>
<div style="padding-left:16px">
   <h2 style="color: red;"><?php if (isset($_GET['error'])): ?>
    <p><?php echo $_GET['error']; ?></p>
  <?php endif ?></h2>
   <h2 style="color: green;"><?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?></h2>
  </div>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="addressshop"><i class="fa fa-address-card-o"></i> Address of the shop</label>
            <input type="text" id="addressshop" name="addressshop" placeholder="Name_of the_shop/City/Street">
            <label for="my_image">Upload the reception</label>
            
           <input type="file" 
                  name="my_image">
            <h2></h2>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address of you</label>
            <input type="text" id="adr" name="adrofyou" placeholder="City/Street">
            <label for="homeNu">Number of your home</label>
            <input type="text" id="homeNu" name="homeNu" placeholder="12">

            <div class="row">
              <div class="col-50">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
        <input type="submit" value="Continue to checkout" class="btn">
        
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>1</b></span></h4>
      <p>Fast Delivery <span class="price">40 IL</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>40 IL</b></span></p>
    </div>
  </div>
</div>
</body>
</html>
