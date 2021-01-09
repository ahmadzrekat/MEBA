<?php 

    if(isset($_POST['UName']) && isset($_POST['Email']) && isset($_POST['Subject']))
    {
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];

       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header("Location: contact_us.php?error=data is required");
       }
       else
       {
           $to = "abbasmohammeds2.ma@gmail.com";

           mail($to,$Subject,$Msg,$Email);
           header("Location: contact_us.php?success=data is successfully");

          
       }
    }
    else
    {
        header("location:contact_us.php");
    }
?>