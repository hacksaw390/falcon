<?php 

session_start();

require 'db.php';

	

$icon1 = htmlentities($_POST['icon1'],ENT_QUOTES);
$icon2 = htmlentities($_POST['icon2'],ENT_QUOTES);
$icon3 = htmlentities($_POST['icon3'],ENT_QUOTES);
$icon4 = htmlentities($_POST['icon4'],ENT_QUOTES);


$_SESSION['icon1']=$icon1;
$_SESSION['icon2']=$icon2;
$_SESSION['icon3']=$icon3;



$insert = "INSERT INTO social (social1, social2, social3, social4) 
			VALUES('$icon1','$icon2','$icon3','$icon4')";

$result = mysqli_query($db, $insert);

		$_SESSION['success'] = 'Registation Successfull';
		header('location:add-social.php');





	
	

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
