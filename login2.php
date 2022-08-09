<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
	<html>
		<head>
			<title>Falcon Template</title>
			<link rel="stylesheet" href="./asset/plugin/bootstrap/css/bootstrap.min.css">
			<link rel="stylesheet" href="./asset/css/bootstrap-iso.css">
			<link rel="stylesheet" href="./asset/css/font-awesome.min.css">
			<!-- <link rel="stylesheet" href="./asset/sweetalert2.min.css"> -->
			<link rel="stylesheet" href="./asset/css/style.css">

		</head>
		<body>
			<!-- ===============================
			Registration Form
			=================================-->
			
			<section>
				<div class="container">
					<div class="row">
						<div class="col-lg-6 m-auto bg-secondary py-1">
							<div class="text-center text-white py-2 my-2 bg-info">
								<h2>Login</h2>
							</div>

							<?php if (isset($_SESSION['log_err_msg'])) { ?>
								
								
							 <div class="alert alert-warning alert-dismissible fade show" role="alert">
							 	<?php  	echo $_SESSION['log_err_msg']; unset($_SESSION['log_err_msg']); ?>
								 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
								    <span aria-hidden="true">&times;</span>
								 </button>
							</div>
							<?php } ?>
							<form action="login_post.php" method="post">
								<div class="form-group">

								<div class="form-group">
									<input type="text" name="email" placeholder="Email" class="form-control">
								</div>

								<div class="form-group">
									<input type="password" name="pass" placeholder="Password" class="form-control">
								</div>


								<div class="form-group">
									<input type="submit" id="btn" value="Submit" name="submit" class="btn btn-info">
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>


			<!-- ===============================
			Scroll Up
			=================================-->
			<!-- <div id="gotoup"><i class="fa fa-chevron-up" aria-hidden="true"></i></div> -->
			
			<script src="./asset/js/jquery-1.12.4.min.js"></script>
			<script src="./asset/plugin/bootstrap/js/popper.min.js"></script>
			<script src="./asset/plugin/bootstrap/js/bootstrap.min.js"></script>
			<script src="./asset/js/bootstrap-datepicker.min.js"></script>
			<!-- <script src="./asset/js/sweetalert2.min.js"></script> -->
			<link rel="stylesheet" href="./asset/css/bootstrap-datepicker3.css">
			<script src="./asset/js/script.js"></script>






