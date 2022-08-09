<?php
session_start(); 
require 'db.php';


$id = $_GET['id'];

$select_logo = "SELECT * FROM logos WHERE id=$id";
$select_logo_result = mysqli_query($db, $select_logo);
$after_assoc = mysqli_fetch_assoc($select_logo_result);

	if ($after_assoc['logo_del_status']==1) {
		$update_logo = "UPDATE logos SET logo_del_status=0 WHERE id ='$id' ";
		$update_result = mysqli_query($db, $update_logo);

		$_SESSION['restor_success']= 'Your selected data successfully restor!';
		header('location:recycle-logo.php');
	}



 ?>