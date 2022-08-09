<?php 

session_start();

require 'db.php';

	

$testi_name = htmlentities($_POST['testi_name'],ENT_QUOTES);
$testi_desp = htmlentities($_POST['testi_desp'],ENT_QUOTES);


$_SESSION['testi_name']=$testi_name;
$_SESSION['testi_desp']=$testi_desp;



	if (empty($testi_name)) {
		$err_mss = 'name empty';
		header('location:add-testimonial.php?$fname_err='.$err_mss);
	}
	elseif (empty($testi_desp)) {
		$err_mss = 'testi_desp Empty';
		header('location:add-testimonial.php?$lname_err='.$err_mss);
	}
	else {

		$uploaded_file = $_FILES['testi_img'];
		$after_explide = explode('.', $uploaded_file['name']);
		$last_extntion = end($after_explide);
		$allow_extension = array('jpg','jpeg','png','gif');

		if (in_array($last_extntion, $allow_extension)) {
			if ($uploaded_file['size'] < 100000000) {
				$insert = "INSERT INTO testimonials (testi_name, testi_desp) 
						VALUES('$testi_name','$testi_desp')";
				$result = mysqli_query($db, $insert);

				$last_id = mysqli_insert_id($db);
				$file_naem = $last_id.'.'.$last_extntion;
				$new_location = 'uploads/testimonials/'.$file_naem;
				move_uploaded_file($uploaded_file['tmp_name'], $new_location);

				$upload_img = "UPDATE testimonials SET testi_img='$file_naem' WHERE id='$last_id' ";

				$update_img_resut = mysqli_query($db,$upload_img);

				$_SESSION['success'] = 'Registation Successfull';
				header('location:add-testimonial.php');

			}else {
				$_SESSION['size_erroe'] = "Jumboo size";
				header('location:add-testimonial.php');
			}
		}else {
			$_SESSION['formet_erroe'] = "Invalid formet";
			header('location:add-testimonial.php');
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
