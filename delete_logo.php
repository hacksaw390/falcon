<?php 
require 'db.php';
session_start();

$id = $_GET['id'];

$logo_select = "SELECT * FROM logos WHERE id='$id'";
$logo_select_result = mysqli_query($db, $logo_select);
$logo_after_assoc = mysqli_fetch_assoc($logo_select_result);


if ($logo_after_assoc['logo_del_status']==1) {
	



	$select_data = "SELECT logo FROM logos WHERE id=$id";
	$select_query = mysqli_query($db,$select_data);
	$after_del_assoc = mysqli_fetch_assoc($select_query);



	if(mysqli_num_rows($select_query) != 0){
		$delete_photo = "uploads/logos/".$after_del_assoc['photo'];
		unlink($delete_photo);

		$delete = "DELETE FROM logos WHERE id=$id";
		$delete_result = mysqli_query($db, $delete);
		$_SESSION["deletelogo"] = "LogoDelete";
		header('location:recycle-logo.php');
	}else{
		$_SESSION["deleteuserunsuccessfull"] = "UserDeleteNoSuccess";
		header('location:recycle-logo.php');
	}



}else{
	

	$logo_soft_del = "UPDATE logos SET logo_del_status = 1 WHERE id='$id' ";
	$logo_soft_result = mysqli_query($db,$logo_soft_del);
	$_SESSION["deleteuserunsuccessfull"] = "UserDeleteNoSuccess";
	header('location:view-logo.php');









}


	// $select_data = "SELECT logo FROM logos WHERE id=$id";
	// $select_query = mysqli_query($db,$select_data);
	// $after_del_assoc = mysqli_fetch_assoc($select_query);



	// if(mysqli_num_rows($select_query) != 0){
	// 	$delete_photo = "uploads/logos/".$after_del_assoc['photo'];
	// 	unlink($delete_photo);

	// 	$delete = "DELETE FROM logos WHERE id=$id";
	// 	$delete_result = mysqli_query($db, $delete);
	// 	$_SESSION["deletelogo"] = "LogoDelete";
	// 	header('location:view-logo.php');
	// }else{
	// 	$_SESSION["deleteuserunsuccessfull"] = "UserDeleteNoSuccess";
	// 	header('location:view-logo.php');
	// }


 ?>