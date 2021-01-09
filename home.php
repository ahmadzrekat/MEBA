<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="stylehome.css">
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Hello, <?php echo $_SESSION['name']; ?></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#contact">CONTACT</a></li>
        <li><a href="home1.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
     
     <div class="columns">
  <ul class="price">
    <li class="header">Regular Delivery</li>
    <li class="grey">IL 20 </li>
    <li>estimated between 1-2 days</li>
     <li>Delivery is not for food</li>
    <li>Delivery for power outages</li>
    <li>Delivery for everything to the house</li>
    <li class="grey"><a href="location2.php" class="button">Continue</a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:#4CAF50">Fast Delivery</li>
    <li class="grey">IL 40 </li>
    <li>estimated between 10-120 minute</li>
    <li>Delivery for food</li>
    <li>Delivery for power outages</li>
    <li>Delivery for everything to the house</li>
    <li class="grey"><a href="location.php" class="button">Continue</a></li>
  </ul>
</div>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>