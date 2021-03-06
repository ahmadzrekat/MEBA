<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
  <title>MEBA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-color: #008000;
    color: #fff;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }

  .logo {
    color: #008000;
    font-size: 200px;
  }

  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #008000;
  }
  .carousel-indicators li {
    border-color: #008000;
  }
  .carousel-indicators li.active {
    background-color: #008000;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  
  .navbar {
    margin-bottom: 0;
    background-color: #008000;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #008000 !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }     
.circle-tile {
    margin-bottom: 15px;
    text-align: center;
}
.circle-tile-heading {
    border: 3px solid rgba(255, 255, 255, 0.9);
    border-radius: 100%;
    color: #FFF;
    height: 80px;
    margin: 0 auto -50px;
    position: relative;
    width: 80px;
}
      
      
.circle-tile-heading .fa {
    line-height: 80px;
}
.circle-tile-content {
    padding-top: 100px;
}
      
.circle-tile-number {
    font-size: 50px;
    font-weight: 700;
    line-height: 1;
    padding: 18px 0 20px;
}
.circle-tile-description {
    text-transform: uppercase;
}


.dark-blue {
    background-color: #008000;
}

.text-faded {
    color: rgba(255, 255, 255, 0.7);
}  
      
      
      
      
      
      
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #008000;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Home</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="login_employee.php">Login Employee</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
    <img src="Untitled-2.png">
  <h1>MEBA</h1>
  <p>We are the fastest delivery to you</p>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Users</h2>
      <h4>Total Number of MEBA Users: 1.2M People around Israel</h4>
      <p><h4>Total Number of Daily Active MEBA Users: 10K People around Israel</h4>
    </div>
    <div class="col-sm-4">
      <div class="circle-tile ">
        <div class="circle-tile-heading dark-blue"><i class="fa fa-users fa-fw fa-3x"></i></div>
        <div class="circle-tile-content dark-blue">
          <div class="circle-tile-description text-faded"> Users</div>
          <div class="circle-tile-number text-faded ">1.2M</div>
        </div>
      </div>
      <div class="circle-tile ">
        <div class="circle-tile-heading dark-blue"><i class="fa fa-users fa-fw fa-3x"></i></div>
        <div class="circle-tile-content dark-blue">
          <div class="circle-tile-description text-faded">Daily Active Users:</div>
          <div class="circle-tile-number text-faded ">10k</div>
        </div>
      </div>        
    </div>
    </div>
  </div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
            <h2>About MEBA delivery</h2>
      <h4><strong>Who we are?//what are we?:</strong>All you need is to get all your purchases from your favorite local stores and the main thing is to get to you quickly, right?</h4>
      <p>So get to know MEBA - by asking an online delivery representative to bring all your purchases from your favorite local stores to where you need to go.</p>
      <p> With the help of a website, you can order a delivery representative and even save time and make repeat orders easily.</p>
      <p> Over 20 years of experience have taught us that excellent service is the basis of all our activities, so we invest and provide you with a professional staff that will do everything to make you happy and satisfied customers!.</p>
      <p>So wherever you are, MEPA is at your service.</p>  
    </div>
  </div>
</div>
    
    
   <h2 class="text-center">What our customers say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This web is the best. I am so happy with the result!"<br><span>Zahvi, player football</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span>Ahmad zrekat, software engineer</span></h4>
      </div>
      <div class="item">
        <h4>"This site is easy to use, and I'm happy with that"<br><span>Benyamin Netanyaho, Prime Minister </span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>   
    
    
<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> beer sheva, Israel</p>
      <p><span class="glyphicon glyphicon-phone"></span> +972 549098136</p>
      <p><span class="glyphicon glyphicon-envelope"></span> bhaael@ac.sce.ac.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
            <h1>If you want to contact us, click here:</h1>
          <a href="contact_us.php" class="btn btn-default pull-right" type="submit">click here</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Image of wep -->
<img src="7498.jpg" class="w3-image w3-greyscale-min" style="width:100%">

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Back to the start</p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
}) 
</script>
</body>
</html>