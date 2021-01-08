<?php
if (isset($_POST['uname']) && isset($_POST['password']))
{

	$uname = $_POST['uname'];
     $pass = $_POST['password'];

     if (empty($uname)) {
          header("Location: login_employee.php?error=User Name is required");
         exit();
     }else if(empty($pass)){
        header("Location: login_employee.php?error=Password is required");
         exit();
     }else{
	$username="admin";
	$password="123";
	if($_POST['uname']==$username && $_POST['password']==$password) {
		$_SESSION['uname']=$username;
		header('location:employee.php');
		}
	else{
		$err="Authentication Failed Try again!";
		}
	}
	}
?>