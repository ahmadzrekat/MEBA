<?php 
session_start(); 
include "db_conn.php";
if (isset($_POST['addressshop']) 
    && isset($_POST['my_image']) && isset($_POST['adrofyou'])
    &&isset($_POST['homeNu'])){

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
	$addressshop = validate($_POST['addressshop']);
	$adrofyou = validate($_POST['adrofyou']);
	$homeNu = validate($_POST['homeNu']);
	$userna =  $_SESSION['name'];
	$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
	$img_upload_path = 'uploads/'.$new_img_name;
	move_uploaded_file($tmp_name, $img_upload_path);
	$url = $img_upload_path;
     $image = file_get_contents("$url");
     


	if (empty($addressshop)) {
		header("Location: checkout2.php?error=addressshop is required&$user_data");
	    exit();
	}
	else if(empty($adrofyou)){
        header("Location: checkout2.php?error=adress of you is required&$user_data");
	    exit();
	}
	else if(empty($homeNu)){
        header("Location: checkout2.php?error=home number is required&$user_data");
	    exit();
	}
	else if(empty($new_img_name)){
        header("Location: checkout2.php?error=image is required&$user_data");
	    exit();
	}

	else{
           $sql2 = "INSERT INTO checkout(username, type_delivery, address_shop, image_url, 	address_of_you, home_number) 
           VALUES('$userna', 'Regular delivery', '$addressshop','$image', '$adrofyou', '$homeNu')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: checkout2.php?success=Your shippment has been created successfully");
	         exit();
           }else {
	           	header("Location: checkout2.php?error=unknown error occurred&$user_data");
		        exit();
		    }
           
		
	}
	
}
else{
	header("Location: checkout2.php");
	exit();
}