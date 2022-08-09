<?php
session_start();
require 'db.php';


$id = $_POST['id'];


$icon1 = $_POST['icon1'];
$icon2 = $_POST['icon2'];
$icon3 = $_POST['icon3'];
$icon4 = $_POST['icon4'];






		$update = "UPDATE social SET social1='$icon1', social2='$icon2', social3='$icon3', social4='$icon4' WHERE id='$id' ";
		$update_query = mysqli_query($db, $update);
		header('location:view-icon.php');

?>