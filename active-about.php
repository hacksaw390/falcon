<?php 
require 'db.php';

$id = $_GET['id'];

$select_logo = "SELECT * FROM abouts WHERE id=$id";
$select_logo_result = mysqli_query($db, $select_logo);
$after_assoc = mysqli_fetch_assoc($select_logo_result);

	if ($after_assoc['status']==0) {
		$update_logo = "UPDATE abouts SET status=0";
		$update_result = mysqli_query($db, $update_logo);

		$update_logo2 = "UPDATE abouts SET status=1 WHERE id=$id";
		$update_result2 = mysqli_query($db, $update_logo2);

		header('location:view-about.php');
	}



 ?>