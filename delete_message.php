<?php 
require 'db.php';
session_start();

$id = $_GET['id'];

$multi_id = $_POST['id'];

$check_multi_id = array_filter($multi_id);


	if (!empty($id)) {

			$delete = "DELETE FROM message WHERE id=$id";
			$delete_result = mysqli_query($db, $delete);
			$_SESSION["delete_mess"] = "MessDelete";
			header('location:view-message.php');

	}elseif (!empty($check_multi_id)) {

		foreach ($multi_id as $msg_id ) {

			$delete = "DELETE FROM message WHERE id=$msg_id";
			$delete_result = mysqli_query($db, $delete);
			$_SESSION["delete_mess"] = "MessDelete";
			header('location:view-message.php');

		}
	}else{
		header('location:view-message.php');
	}




	


 ?>