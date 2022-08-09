<?php 

session_start();

require 'db.php';

	



		$uploaded_file = $_FILES['logo'];
		$after_explide = explode('.', $uploaded_file['name']);
		$last_extntion = end($after_explide);
		$allow_extension = array('jpg','jpeg','png','gif');

		if (in_array($last_extntion, $allow_extension)) {
			if ($uploaded_file['size'] < 100000000) {

				$logo_name = $uploaded_file['name'];
				$insert = "INSERT INTO logos (logo) 
						VALUES('$logo_name')";
				$result = mysqli_query($db, $insert);

				$last_id = mysqli_insert_id($db);
				$file_naem = $last_id.'.'.$last_extntion;
				$new_location = 'uploads/logos/'.$file_naem;
				move_uploaded_file($uploaded_file['tmp_name'], $new_location);

				$upload_img = "UPDATE logos SET logo='$file_naem' WHERE id='$last_id' ";

				$update_img_resut = mysqli_query($db,$upload_img);

				$_SESSION['success'] = 'Registation Successfull';
				header('location:add-logo.php');

			}else {
				$_SESSION['size_erroe'] = "Jumboo size";
				header('location:add-logo.php');
			}
		}else {
			$_SESSION['formet_erroe'] = "Invalid formet";
			header('location:add-logo.php');
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
