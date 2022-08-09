<?php 

session_start();

require 'db.php';

	

$banner_title = htmlentities($_POST['banner_title'],ENT_QUOTES);
$banner_desp = htmlentities($_POST['banner_desp'],ENT_QUOTES);
$banner_btn = htmlentities($_POST['banner_btn'],ENT_QUOTES);
$banner_status = htmlentities($_POST['status'],ENT_QUOTES);


$_SESSION['banner_title']=$banner_title;
$_SESSION['banner_desp']=$banner_desp;
$_SESSION['banner_btn']=$banner_btn;



	if (empty($banner_title)) {
		$err_mss = 'banner_title empty';
		header('location:add-banner.php?$fname_err='.$err_mss);
	}
	elseif (empty($banner_desp)) {
		$err_mss = 'banner_desp Empty';
		header('location:add-banner.php?$lname_err='.$err_mss);
	}
	elseif (empty($banner_btn)) {
		$err_mss = 'banner_btn name Empty';
		header('location:add-banner.php?$uname_err='.$err_mss);
	}
	else {

		$uploaded_file = $_FILES['banner_img'];
		$after_explide = explode('.', $uploaded_file['name']);
		$last_extntion = end($after_explide);
		$allow_extension = array('jpg','jpeg','png','gif');

		if (in_array($last_extntion, $allow_extension)) {
			if ($uploaded_file['size'] < 100000000) {
				$insert = "INSERT INTO banners (banner_title, banner_desp, banner_btn, status) 
						VALUES('$banner_title','$banner_desp','$banner_btn','$banner_status')";
				$result = mysqli_query($db, $insert);

				$last_id = mysqli_insert_id($db);
				$file_naem = $last_id.'.'.$last_extntion;
				$new_location = 'uploads/banners/'.$file_naem;
				move_uploaded_file($uploaded_file['tmp_name'], $new_location);

				$upload_img = "UPDATE banners SET banner_img='$file_naem' WHERE id='$last_id' ";

				$update_img_resut = mysqli_query($db,$upload_img);

				$_SESSION['success'] = 'Registation Successfull';
				header('location:add-banner.php');

			}else {
				$_SESSION['size_erroe'] = "Jumboo size";
				header('location:add-banner.php');
			}
		}else {
			$_SESSION['formet_erroe'] = "Invalid formet";
			header('location:add-banner.php');
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
