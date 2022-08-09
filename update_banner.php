<?php
session_start();
require 'db.php';


$id = $_POST['id'];


$banner_title = $_POST['banner_title'];
$banner_desp = $_POST['banner_desp'];
$banner_btn = $_POST['banner_btn'];






		if ($_FILES['photo']['name'] != '') {
			$select_data = "SELECT photo FROM users WHERE id=$id";
			$select_query = mysqli_query($db,$select_data);
			$after_assoc = mysqli_fetch_assoc($select_query);
			$delete_photo = "uploads/users/".$after_assoc['photo'];
			unlink($delete_photo);
			$upload_photo = $_FILES['photo'];
			$explode = explode('.', $upload_photo['name']);
			$lst_extention = end($explode);
			$allowed_extension = array('jpeg', 'jpg', 'png', 'gif');
			if (in_array($lst_extention, $allowed_extension)) {
				if ($upload_photo['size'] < 1000000000) {
					$file_name = $id.'.'.$lst_extention;
					$new_location = 'uploads/users/'.$file_name;
					move_uploaded_file($upload_photo['tmp_name'], $new_location);
					$update_photo = "UPDATE users SET photo='$file_name' WHERE id=$id ";
					$upload_photo_resutlt = mysqli_query($db, $update_photo);
					$update = "UPDATE users SET fname='$fname',
												lname='$lname',
												uname='$uname',
												phone='$phone',
												dob='$date',
												gender='$gender',
												skill='$multi_check',
												position='$select2',
												role='$role',
												about='$textarea'
											WHERE id='$id' ";
					$update_query = mysqli_query($db, $update);
					header('location:users.php');
				}else {
					echo 'boro file';
				}
			}else {
				echo 'nai';
			}
		}else {
		$update = "UPDATE users SET fname='$fname',
									lname='$lname',
									uname='$uname',
									phone='$phone',
									dob='$date',
									gender='$gender',
									skill='$multi_check',
									position='$select2',
									role='$role',
									about='$textarea'
								WHERE id='$id' ";
		$update_query = mysqli_query($db, $update);
		header('location:users.php');
		}
		
	
?>