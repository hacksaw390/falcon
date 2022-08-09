<?php 
session_start();
require 'db.php';

 $log_email = $_POST['email'];
 $log_pass = $_POST['pass'];


$log_select = "SELECT COUNT(*) as shamim, password, id, uname, role, photo FROM users WHERE email='$log_email'";
$log_select_query = mysqli_query($db,$log_select);
$after_assoc = mysqli_fetch_assoc($log_select_query);


if ($after_assoc['shamim']==1) {



	if (password_verify($log_pass, $after_assoc['password'])) {

		$_SESSION['log_msg'] = 'Login First';
		$_SESSION['name'] = $after_assoc['uname'];
		$_SESSION['power'] = $after_assoc['role'];
		$_SESSION['photo'] = $after_assoc['photo'];
		$_SESSION['id'] = $after_assoc['id'];
		setcookie('shamim', 'dewan', time() + 20);
		header('location:admin.php');
	}
	else{
		$_SESSION['log_err_msg'] = 'Your Eamil or Password not match'; 
		header('location:signin.php');
	}

}
else {
	$_SESSION['log_err_msg'] = 'Your Eamil or Password not match'; 
	header('location:signin.php');
}

 ?>