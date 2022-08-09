<?php 

session_start();

require 'db.php';

	

$about_title = htmlentities($_POST['about_title'],ENT_QUOTES);
$about_desp = htmlentities($_POST['about_desp'],ENT_QUOTES);
$about_sub_title = htmlentities($_POST['about_sub_title'],ENT_QUOTES);
$feature = htmlentities($_POST['feature'],ENT_QUOTES);


$_SESSION['about_title']=$about_title;
$_SESSION['about_desp']=$about_desp;
$_SESSION['about_sub_title']=$about_sub_title;



	if (empty($about_title)) {
		$err_mss = 'banner_title empty';
		header('location:add-about.php?$fname_err='.$err_mss);
	}
	elseif (empty($about_desp)) {
		$err_mss = 'banner_desp Empty';
		header('location:add-about.php?$lname_err='.$err_mss);
	}
	elseif (empty($about_sub_title)) {
		$err_mss = 'banner_btn name Empty';
		header('location:add-about.php?$uname_err='.$err_mss);
	}
	else {

		$uploaded_file = $_FILES['about_img'];
		$after_explide = explode('.', $uploaded_file['name']);
		$last_extntion = end($after_explide);
		$allow_extension = array('jpg','jpeg','png','gif');

		if (in_array($last_extntion, $allow_extension)) {
			if ($uploaded_file['size'] < 100000000) {
				$insert = "INSERT INTO abouts (about_title, about_desp, about_sub_title, feature) 
						VALUES('$about_title','$about_desp','$about_sub_title','$feature')";
				$result = mysqli_query($db, $insert);

				$last_id = mysqli_insert_id($db);
				$file_naem = $last_id.'.'.$last_extntion;
				$new_location = 'uploads/abouts/'.$file_naem;
				move_uploaded_file($uploaded_file['tmp_name'], $new_location);

				$upload_img = "UPDATE abouts SET about_img='$file_naem' WHERE id='$last_id' ";

				$update_img_resut = mysqli_query($db,$upload_img);

				$_SESSION['success'] = 'Registation Successfull';
				header('location:add-about.php');

			}else {
				$_SESSION['size_erroe'] = "Jumboo size";
				header('location:add-about.php');
			}
		}else {
			$_SESSION['formet_erroe'] = "Invalid formet";
			header('location:add-about.php');
		}
	}
		
	






	
	

	// unset($_SESSION['fname']);
	// unset($_SESSION['lname']);
	// unset($_SESSION['uname']);
	// unset($_SESSION['email']);
	// unset($_SESSION['phone']);
	// unset($_SESSION['date']);
	// unset($_SESSION['gender']);
	// unset($_SESSION['check']);
	// unset($_SESSION['select']);
	// unset($_SESSION['role']);
	// unset($_SESSION['area']);






 ?>
