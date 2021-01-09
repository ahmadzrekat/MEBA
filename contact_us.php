<!DOCTYPE html>
<html>
<head>
     <title>LOGIN</title>
     <link rel="stylesheet" type="text/css" href="stylelogin.css">
</head>
<body>
     <form action="mail.php" method="post">
          <h2>CONTACT US</h2>
           <?php if (isset($_GET['error'])) { ?>
               <p class="error"><?php echo $_GET['error']; ?></p>
          <?php } ?>
     
          <label>User Name</label>
          <input type="text" name="UName" placeholder="User Name"><br>
          <label>Email</label>
          <input type="email" name="Email" placeholder="Email"><br> 
          <label>Subject</label>
          <input type="text" name="Subject" placeholder="Subject"><br>       
     <textarea name="msg"  rows="5" cols="65" placeholder="Write The Message"></textarea>
          <h2></h2>
          <button type="submit">Send</button>
     </form>
</body>
</html>