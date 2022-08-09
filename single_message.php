<?php require 'deshboard_part/header.php' ?>
<?php

require 'db.php';

$id = $_GET['id'];

	$updata_message = "UPDATE message SET status=1 WHERE id=$id";
	$update_result = mysqli_query($db, $updata_message);

	$select = "SELECT * FROM message WHERE id=$id";
	$select_result = mysqli_query($db, $select);

	$catch_user = mysqli_fetch_assoc($select_result);



?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Message</title>
		<link rel="stylesheet" href="./asset/datatable/css/bootstrap.min.css">
		<link rel="stylesheet" href="./asset/datatable/css/style.css">
	</head>
	<body>
		
		<div class="container mt-5">
			<div class="row">
				<div class="col-lg-12 m-auto">
					<div class="card bg-light mb-2">
						<div class="card-header text-white" style="background: linear-gradient(88deg, #13b4ca, #18cabe);" ><h3>Message</h3></div>
						<div class="card-body">
							<table class="table table-bordered">
								<tr>
									<th>ID</th>
									<td><?php echo $catch_user['id'] ?></td>
								</tr>
								<tr>
									<th>FULL NAME</th>
									<td><?php echo $catch_user['msg_name'] ?></td>
								</tr>
								<tr>
									<th>EMAIL</th>
									<td><?php echo $catch_user['msg_email'] ?></td>
								</tr>
								<tr>
									<th>MESSAGE</th>
									<td><?php echo $catch_user['msg_desp'] ?></td>
								</tr>
								<tr>
									<th>POST TIME</th>
									<td><?php 

										$old = $catch_user['post_time'];
										$new = date('h:i:s', strtotime($old));
										echo $new; 

									?></td>
								</tr>
								<tr>
									<th>POST DATE</th>
									<td><?php 

										$old = $catch_user['post_time'];
										$new = date('d:m:Y', strtotime($old));
										echo $new; 

									?></td>
								</tr>
								<tr>
									<th>IP ADDRESS</th>
									<td><?php echo $catch_user['ip'] ?></td>
								</tr>
								<tr>
									<th>PC NAME</th>
									<td><?php echo $catch_user['pc_name'] ?></td>
								</tr>
							</table>
							<a href="view-message.php" class="btn btn-primary">Back</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php require 'deshboard_part/footer.php' ?>
		<!-- <script src="asset/datatable/js/jquery-2.2.4.min.js"></script> -->
		<script src="asset/datatable/js/bootstrap.min.js"></script>
		<script src="asset/datatable/js/custom.js"></script>
	</body>
</html>