<?php require 'deshboard_part/header.php' ?>
<?php if($_SESSION['power']==1 || $_SESSION['power']==2){ ?>
<?php

require 'db.php';

$id = $_GET['id'];

	$select = "SELECT * FROM users WHERE id=$id";
	$select_result = mysqli_query($db, $select);

	$catch_user = mysqli_fetch_assoc($select_result);



?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title><?php echo $catch_user['fname'].' '.$catch_user['lname']."'s" ?> User Info</title>
		<link rel="stylesheet" href="./asset/datatable/css/bootstrap.min.css">
		<link rel="stylesheet" href="./asset/datatable/css/style.css">
	</head>
	<body>
		
		<div class="container mt-5">
			<div class="row">
				<div class="col-lg-12 m-auto">
					<div class="card bg-light mb-2">
						<div class="card-header text-white" style="background: linear-gradient(88deg, #13b4ca, #18cabe);" ><h3><?php echo $catch_user['fname'].' '.$catch_user['lname']."'s" ?> User Info</h3></div>
						<div class="card-body">
							<table class="table table-bordered">
								<tr>
									<th>ID</th>
									<td><?php echo $catch_user['id'] ?></td>
								</tr>
								<tr>
									<th>FULL NAME</th>
									<td><?php echo $catch_user['fname'].' '.$catch_user['lname'] ?></td>
								</tr>
								<tr>
									<th>USER NAME</th>
									<td><?php echo $catch_user['uname'] ?></td>
								</tr>
								<tr>
									<th>EMAIL</th>
									<td><?php echo $catch_user['email'] ?></td>
								</tr>
								<tr>
									<th>PHONE</th>
									<td><?php echo $catch_user['phone'] ?></td>
								</tr>
								<tr>
									<th>BIRTH DAY</th>
									<td><?php echo $catch_user['dob'] ?></td>
								</tr>
								<tr>
									<th>GENDER</th>
									<td><?php echo $catch_user['gender'] ?></td>
								</tr>
								<tr>
									<th>SKILL</th>
									<td><?php echo $catch_user['skill'] ?></td>
								</tr>
								<tr>
									<th>POSITION</th>
									<td><?php echo $catch_user['position'] ?></td>
								</tr>
								<tr>
									<th>ROLE</th>
									<td>
										<?php  

											if ($catch_user['role']==1) {
					                			echo 'Admin';
					                		}elseif ($catch_user['role']==2) {
					                			echo 'Moderator';
					                		}else{
					                			echo 'Editor';
					                		}

										?>
											
									</td>
								</tr>
								<tr>
									<th>POST DATE</th>
									<td>
										<?php 


										$old = $catch_user['register_date'];
										$new = date('d-m-Y', strtotime($old));
										echo $new;


										?>
											
									</td>
								</tr>
								<tr>
									<th>POST TIME</th>
									<td>
										<?php 


										$old = $catch_user['register_date'];
										$new = date('h:i:s', strtotime($old));
										echo $new;


											// echo $catch_user['register_date'] 
										?></td>
								</tr>
								<tr>
									<th>PHOTO</th>
									<td><img src="uploads/users/<?php echo $catch_user['photo'] ?>" alt="" width='300'></td>
								</tr>
							</table>
							<a href="users.php" class="btn btn-primary">Back</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php require 'deshboard_part/footer.php' ?>
		<?php }else{
			header('location:logout.php');
		} ?> 
		<script src="asset/datatable/js/jquery-2.2.4.min.js"></script>
		<script src="asset/datatable/js/bootstrap.min.js"></script>
		<script src="asset/datatable/js/custom.js"></script>
	</body>
</html>