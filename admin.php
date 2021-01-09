<?php session_start();
?>
<!DOCTYPE html>

<html>
<head>
<style>


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
  left: 50%;
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
  padding: 200px 100px;
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
  border: 2px solid blue;
}
.cb:hover {
  
  background-color: blue;
  color: white;
} 
.ca {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 200px 100px;
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

</style>
</head>
<body>

<h2>Profgramming Page</h2>


    <div class="center">
      
      <a href="http://localhost/phpmyadmin/db_structure.php?server=1&db=test_db" class="ca">Data Base</a>  
      <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox" class="cb">Messages Of Users</a>
      
    </div>
 



</body>
</html>
