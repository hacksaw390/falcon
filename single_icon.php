<?php require 'deshboard_part/header.php' ?>
<?php 
// if($_SESSION['power']==1 || $_SESSION['power']==2){ 
	?>
<?php

require 'db.php';

$id = $_GET['id'];

	$select = "SELECT * FROM social WHERE id=$id";
	$select_result = mysqli_query($db, $select);

	$catch_user = mysqli_fetch_assoc($select_result);



?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title> Banner Info</title>
		<link rel="stylesheet" href="./asset/datatable/css/bootstrap.min.css">
		<link rel="stylesheet" href="./asset/datatable/css/style.css">
	</head>
	<body>
		
		<div class="container mt-5">
			<div class="row">
				<div class="col-lg-12 m-auto">
					<div class="card bg-light mb-2">
						<div class="card-header text-white" style="background: linear-gradient(88deg, #13b4ca, #18cabe);" ><h3> Social Icon Info</h3></div>
						<div class="card-body">
							<table class="table table-bordered">
								<tr>
									<th>ID</th>
									<td><?php echo $catch_user['id'] ?></td>
								</tr>
								<tr>
									<th>SOCIAL-1</th>
									<td><?php echo $catch_user['social1'] ?></td>
								</tr>
								<tr>
									<th>SOCIAL-2</th>
									<td><?php echo $catch_user['social2'] ?></td>
								</tr>
								<tr>
									<th>SOCIAL-3</th>
									<td><?php echo $catch_user['social3'] ?></td>
								</tr>
								<tr>
									<th>SOCIAL-4</th>
									<td><?php echo $catch_user['social4'] ?></td>
								</tr>
							</table>
							<a href="view-icon.php" class="btn btn-primary">Back</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php require 'deshboard_part/footer.php' ?>
		<?php 
	// }else{
			// header('location:logout.php');
		// }
		 ?> 
		<script src="asset/datatable/js/jquery-2.2.4.min.js"></script>
		<script src="asset/datatable/js/bootstrap.min.js"></script>
		<script src="asset/datatable/js/custom.js"></script>
	</body>
</html>