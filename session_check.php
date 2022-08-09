<?php 
session_start();
if (!isset($_SESSION['log_msg'])) {
	header('location:signin.php');
}
 ?>