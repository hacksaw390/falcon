<?php 
require 'db.php';
session_start();

 $id = $_GET['id'];



	// $select = "SELECT * FROM services WHERE id=$id";
	// $select_result = mysqli_query($db, $select);
	// $after = mysqli_fetch_assoc($select_result);




	$select_data = "SELECT photo FROM testimonials WHERE id=$id";
	$select_query = mysqli_query($db,$select_data);
	$after_del_assoc = mysqli_fetch_assoc($select_query);

	// if(mysqli_num_rows($select_query) != 0){
		$delete_photo = "uploads/testimonials/".$after_del_assoc['photo'];
		unlink($delete_photo);

		$delete = "DELETE FROM testimonials WHERE id=$id";
		$delete_result = mysqli_query($db, $delete);
		$_SESSION["deleteservice"] = "UserDelete";
		header('location:view-testimonial.php');
	// }
	// else{
	// 	$_SESSION["deleteuserunsuccessfull"] = "UserDeleteNoSuccess";
	// 	header('location:view-service.php');
	// }


 ?>