<?php session_start();
?>
<!DOCTYPE html>

<html>
<head>
<style>
 body {
  background-image: url('22.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}

 

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}

.center {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 60%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
h2 {
  text-align: center;
  margin-bottom: 40px;
}
.cb {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 200px 70px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 22px;
  
  transition-duration: 0.4s;
  cursor: pointer;
  font-size: 20px;
  display: inline-block;
  
  text-decoration: none;
  background-color: white; 
  color: black; 
  border: 2px solid yellow;
}
.cb:hover {
  
  background-color: yellow;
  color: white;
} 
.ca {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 200px 70px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 22px;
  
  transition-duration: 0.4s;
  cursor: pointer;
  font-size: 20px;
  display: inline-block;
  
  text-decoration: none;
   background-color: Transparent;
  color: black; 
  border: 2px solid red;
}
.ca:hover {
  
  background-color: red;
  color: white;
} 
.cc {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 200px 70px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 22px;
  
  transition-duration: 0.4s;
  cursor: pointer;
  font-size: 20px;
  display: inline-block;
  
  text-decoration: none;
  background-color: white; 
  color: black; 
  border: 2px solid green;
}
.cc:hover {
 
  background-color: green;
  color: white;
} 
</style>
</head>
<body>

<h2>Area</h2>


    <div class="center">
      <a href="checkout2.php" class="ca">North</a>  
      <a href="checkout2.php" class="cb">Center</a>
      <a href="checkout2.php" class="cc">South</a>
    </div>
 



</body>
</html>
