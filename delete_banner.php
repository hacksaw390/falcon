<?php 
require 'db.php';
session_start();

$id = $_GET['id'];

	$select = "SELECT * FROM banners WHERE id=$id";
	$select_result = mysqli_query($db, $select);
	$after = mysqli_fetch_assoc($select_result);





	$select_data = "SELECT banner_img FROM banners WHERE id=$id";
	$select_query = mysqli_query($db,$select_data);
	$after_del_assoc = mysqli_fetch_assoc($select_query);

	// if(mysqli_num_rows($select_query) != 0){
		$delete_photo = "uploads/banners/".$after_del_assoc['banner_img'];
		unlink($delete_photo);

		$delete = "DELETE FROM banners WHERE id=$id";
		$delete_result = mysqli_query($db, $delete);
		$_SESSION["deletebanner"] = "BannerDelete";
		header('location:view-banner.php');
	// }
	// else{
	// 	$_SESSION["deleteuserunsuccessfull"] = "UserDeleteNoSuccess";
	// 	header('location:users.php');
	// }


 ?>