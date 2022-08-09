<?php 
require 'db.php';
session_start();

$id = $_GET['id'];

	$select = "SELECT * FROM users WHERE id=$id";
	$select_result = mysqli_query($db, $select);
	$after = mysqli_fetch_assoc($select_result);


if ($id == $_SESSION['id']) {
	$_SESSION['admin_msg']='you dont delete your account';
	header('location:users.php');
}elseif ($_SESSION['power'] > $after['role']) {
	$_SESSION['power_msg']='you dont delete your account';
	header('location:users.php');
}elseif ($after['role'] == $_SESSION['power']) {
	$_SESSION['edit_msg']='you dont delete your account';
	header('location:users.php');
}else{


	$select_data = "SELECT photo FROM users WHERE id=$id";
	$select_query = mysqli_query($db,$select_data);
	$after_del_assoc = mysqli_fetch_assoc($select_query);

	// if(mysqli_num_rows($select_query) != 0){
		$delete_photo = "uploads/users/".$after_del_assoc['photo'];
		unlink($delete_photo);

		$delete = "DELETE FROM users WHERE id=$id";
		$delete_result = mysqli_query($db, $delete);
		$_SESSION["deleteuser"] = "UserDelete";
		header('location:users.php');
	// }
	// else{
	// 	$_SESSION["deleteuserunsuccessfull"] = "UserDeleteNoSuccess";
	// 	header('location:users.php');
	// }
}

 ?>