<?php require 'deshboard_part/header.php' ?>
<?php
require 'db.php';
$id = $_GET['id'];
	$select = "SELECT * FROM social WHERE id=$id";
	$select_result = mysqli_query($db, $select);
	$catch_user = mysqli_fetch_assoc($select_result);
?>
<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
	<html>
		<head>
			<title>Falcon Template</title>
			<link rel="stylesheet" href="./asset/plugin/bootstrap/css/bootstrap.min.css">
			<link rel="stylesheet" href="./asset/css/bootstrap-iso.css">
			<link rel="stylesheet" href="./asset/css/font-awesome.min.css">
			<link rel="stylesheet" href="./asset/css/sweetalert2.min.css">
			<link rel="stylesheet" href="./asset/css/style.css">
		</head>
		<body>
			<!-- ===============================
			Registration Form
			=================================-->
			<div class="content-wrapper">
				
				<section>
					<div class="container">
						<div class="row">
							<div class="col-lg-12 m-auto bg-secondary py-1">
								<div class="text-center text-white py-2 my-2" style="background: linear-gradient(88deg, #13b4ca, #18cabe);">
									<h2>Add Social</h2>
								</div>
								<!-- Registration success msg -->
								
								<?php if (isset($_SESSION['success'])) { ?>
								<div class="alert alert-success" role="alert">
									<h2>
									<?php
										echo $_SESSION['success'];
										unset($_SESSION['icon1']);
										unset($_SESSION['icon2']);
										unset($_SESSION['icon3']);
									?>
									</h2>
								</div>
								<?php }  ?>
								<div class="mb-3">
									<p>choose social icon from <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">Fontawesome icon</a></p>
								</div>
								<form action="update_social.php" method="post" enctype="multipart/form-data">

										<div class="form-group">
											<input type="hidden" name="id" class="form-control" value="<?php echo $catch_user['id'] ?>">
										</div>
									<div class="form-group">
										<input value="<?php echo $catch_user['social1'] ?>" type="text" class="form-control " name="icon1" placeholder="icon1">
									</div>
									<div class="form-group">
										<input value="<?php echo $catch_user['social2'] ?>" type="text" class="form-control" name="icon2" placeholder="icon2">
									</div>
									<div class="form-group">
										<input value="<?php echo $catch_user['social3'] ?>" type="text" class="form-control" name="icon3" placeholder="icon3">
									</div>
									<div class="form-group">
										<input value="<?php echo $catch_user['social4'] ?>" type="text" class="form-control" name="icon4" placeholder="icon4">
									</div>
									<div class="form-group">
										<input type="submit" id="btn" value="Submit" name="submit" class="btn btn-info btn-block">
									</div>
								</form>
							</div>
						</div>
					</div>
				</section>
			</div>
			<?php require 'deshboard_part/footer.php' ?>
			<!-- ===============================
			Scroll Up
			=================================-->
			<!-- <div id="gotoup"><i class="fa fa-chevron-up" aria-hidden="true"></i></div> -->
			
			<!-- <script src="./asset/js/jquery-1.12.4.min.js"></script> -->
			<!-- <script src="./asset/plugin/bootstrap/js/popper.min.js"></script> -->
			<!-- <script src="./asset/plugin/bootstrap/js/bootstrap.min.js"></script> -->
			<script src="./asset/js/bootstrap-datepicker.min.js"></script>
			<script src="./asset/js/sweetalert2.min.js"></script>
			<link rel="stylesheet" href="./asset/css/bootstrap-datepicker3.css">
			<script src="./asset/js/script.js"></script>
			<script>
					$("#exist, #fnempty").show();
					setTimeout(function() { $("#exist, #fnempty").hide(); }, 3000);
			</script>
			</script>
			
			<?php if (isset($_SESSION['success'])) { ?>
			<script>
				swal("Submitted", "Registration Successfully Confirmed", "success");
			</script>
			<?php
				unset($_SESSION['success']);
				}
			?>
			
		</body>
		<?php
		unset($_SESSION['icon1']);
		unset($_SESSION['icon2']);
		unset($_SESSION['icon3']);
		?>
	</html>