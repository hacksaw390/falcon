<?php 
if (!isset($_COOKIE['shamim'])) {
	header('location:signin.php');
}else {
	setcookie('shamim', 'dewan', time() + (60*10));
}
 ?>