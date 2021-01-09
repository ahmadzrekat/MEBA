<?php
include "db_conn.php";
include "buyer_table.php";
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($conn, "DELETE FROM checkout WHERE id=$id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: buyer_table.php?success=Your deleted has been created successfully');
}