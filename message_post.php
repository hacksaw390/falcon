<?php 

session_start();

require 'db.php';

	

$msg_name = htmlentities($_POST['fname'],ENT_QUOTES);
$msg_email = htmlentities($_POST['email'],ENT_QUOTES);
$msg_desp = htmlentities($_POST['message'],ENT_QUOTES);
$localIP = getHostByName(getHostName());
$pc_name=gethostname();


$_SESSION['fname']=$msg_name;
$_SESSION['email']=$msg_email;
$_SESSION['message']=$msg_desp;

$to      = 'shamimdewan343@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

// $to = "shamimdewan343@gmail.com";
// $subject = "Raw Mail Send";
// $txt = $msg_desp;
// $headers = $msg_email . "\r\n" .$msg_name;

// mail($to,$subject,$txt,$headers);




	$insert = "INSERT INTO message (msg_name, msg_email, msg_desp, ip, pc_name) 
			VALUES('$msg_name','$msg_email','$msg_desp','$localIP','$pc_name')";
	$result = mysqli_query($db, $insert);

	$_SESSION['success'] = 'Message sent Successfull';
	header('location:index.php#contact');


		
	






	
	




 ?>
