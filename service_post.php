<?php 

session_start();

require 'db.php';

	

// $service_title = htmlentities($_POST['service_title'],ENT_QUOTES);
// $service_desp = htmlentities($_POST['service_desp'],ENT_QUOTES);
$service_title = $_POST['service_title'];
$service_desp = $_POST['service_desp'];


$_SESSION['serviece_title']=$serviece_title;
$_SESSION['service_desp']=$service_desp;



	if (empty($service_title)) {
		$err_mss = 'banner_title empty';
		header('location:add-service.php?$fname_err='.$err_mss);
	}
	elseif (empty($service_desp)) {
		$err_mss = 'banner_desp Empty';
		header('location:add-service.php?$lname_err='.$err_mss);
	}
	else {

		$uploaded_file = $_FILES['service_img'];
		$after_explide = explode('.', $uploaded_file['name']);
		$last_extntion = end($after_explide);
		$allow_extension = array('jpg','jpeg','png','gif');

		if (in_array($last_extntion, $allow_extension)) {
			if ($uploaded_file['size'] < 100000000) {
				$insert = "INSERT INTO services (service_title, service_desp) 
						VALUES('$service_title','$service_desp')";
				$result = mysqli_query($db, $insert);

				$last_id = mysqli_insert_id($db);
				$file_naem = $last_id.'.'.$last_extntion;
				$new_location = 'uploads/services/'.$file_naem;
				move_uploaded_file($uploaded_file['tmp_name'], $new_location);

				$upload_img = "UPDATE services SET service_img='$file_naem' WHERE id='$last_id' ";

				$update_img_resut = mysqli_query($db,$upload_img);

				$_SESSION['success'] = 'Registation Successfull';
				header('location:add-service.php');

			}else {
				$_SESSION['size_erroe'] = "Jumboo size";
				header('location:add-service.php');
			}
		}else {
			$_SESSION['formet_erroe'] = "Invalid formet";
			header('location:add-service.php');
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
