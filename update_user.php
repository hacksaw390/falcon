<?php
// require 'session_check.php';
// require 'cookie_check.php';
session_start();
require 'db.php';


$id = $_POST['id'];


$fname = $_POST['fname'];
$lname = $_POST['lname'];
$uname = $_POST['uname'];
// $email = $_POST['email'];
// $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$";
$phone = $_POST['phone'];
// $pass = $_POST['pass'];
// // $pass = $_POST['pass'];
// $upper = preg_match('@[A-Z]@', $pass);
// $lower = preg_match('@[a-z]@', $pass);
// $number = preg_match('@[0-9]@', $pass);
// $spl = preg_match('@[#,$,&,*]@', $pass);
// $repass = $_POST['repass'];
$date = $_POST['date'];
$gender = $_POST['gender'];

$check = $_POST['check'];
$multi_check = implode(', ', $check);
$user_skill = array_filter($check);
$count_skill = count($check);

$select = $_POST['select'];
$select2 = implode(', ', $select);
$role = $_POST['role'];
$textarea = $_POST['textarea'];





if (empty($fname)) {
		$_SESSION['name_error']= 'fname error';
		header('location:edit_user.php?id='.$id);
	}
	elseif ($count_skill < 2 || $count_skill > 4){
		$_SESSION['skills_error']= 'min 2 and max 4 selseted';
		header('location:edit_user.php?id='.$id);
	}
	
	else{

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
		
	}
?>