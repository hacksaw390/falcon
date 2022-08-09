<?php require 'deshboard_part/header.php' ?>
<?php

require 'db.php';

	$select = "SELECT * FROM testimonials ORDER BY id DESC";
	$select_result = mysqli_query($db, $select);
	$sl = 1;
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>All Banners</title>
<!-- 		<link rel="stylesheet" href="./asset/datatable/css/bootstrap.min.css">
		<link rel="stylesheet" href="asset/datatable/plugin/css/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" href="asset/datatable/plugin/css/buttons.bootstrap4.min.css">
		<link rel="stylesheet" href="./asset/datatable/css/materialdesignicons.min.css">
		<link rel="stylesheet" href="./asset/css/font-awesome.min.css">
		<link rel="stylesheet" href="./asset/css/sweetalert2.min.css">
		<link rel="stylesheet" href="./asset/datatable/css/style.css"> -->
		<link rel="stylesheet" href="./asset/css/style.css">
	</head>
	<body>
		
		<div class="content-wrapper">
			<div class="container-fluid mt-5">
			<div class="row">
				<div class="col-lg-12">
					<div class="card bg-light mb-2">
						<div class="card-header text-white" style="background: linear-gradient(88deg, #13b4ca, #18cabe);"><h3>All Testimonail </h3></div>
						<div class="card-body">
							<table id="myDataTable" class="order-column tabledesign table-striped table table-bordered" style="width:100%; border-collapse: collapse!important;" cellpadding="0">
								<thead>
									<tr>
										<th>SERIAl</th>
										<th>POST ID</th>
										<th>TESTNI NAME</th>
										<th>TESTI DESCRIPTION</th>
										<th>TESTI IMAGE</th>
										<th>ACTIVE</th>
										<th>ACTION</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($select_result as $value) { ?>
									
									<tr>
										<td><?php echo $sl++  ?></td>
										<td><?php echo $value['id']  ?></td>
										<td><?php echo $value['testi_name']  ?></td>
										<td width="30%"><?php echo substr($value['testi_desp'], 0,10).'<span style="color: blue;">Read More</span>'  ?></td>

										<td><img src="uploads/testimonials/<?php echo $value['testi_img'];  ?>" alt="" width='50'></td>
											<td>
												
												<?php if ($value['status']==1){ ?>
												<a class="btn bg-info" href="active-testi.php?id=<?php echo $value['id'] ?>" data-toggle="modal" data-target="#shamim<?php echo $value['id']  ?>">Active</a>
												<?php }else{ ?>
												<a class="btn bg-success" href="active-testi.php?id=<?php echo $value['id'] ?>" data-toggle="modal" data-target="#shamim<?php echo $value['id']  ?>">Deactive</a>
												<?php } ?>
												
												<!-- mahmud er kothin code -->
												<!-- <a href="active-service.php?id=<?php echo $value['id'] ?>" class="btn btn-<?= ($value['status']==1 ?'success': 'warning')?>" data-toggle="modal" data-target="#shamim<?php echo $value['id']  ?>">
													<?= ($value['status']==1) ?'Active': 'deactive' ?>
													
												</a> -->
												<div class="modal fade" id="shamim<?php echo $value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
													<div class="modal-dialog" role="document">
														<div class="modal-content">
															<div class="modal-header bg-info">
																<h5 class="modal-title" id="exampleModalLabel">This Row Will Be Remove</h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body">
																Are You Sure?
															</div>
															<div class="modal-footer">
																<a class="btn btn-info text-white" data-dismiss="modal" href="">No</a>
																<a class="btn btn-danger text-white" href="active-testi.php?id=<?php echo $value['id'] ?>">Yes</a>
															</div>
														</div>
													</div>
												</div>
											</td>
										<td>
											<a href="javascript:;" class="trash" data-toggle="modal" data-target="#dewan<?php echo $value['id']  ?>"><i class="fa fa-trash"></i></a>
												<!-- Modal -->
												<div class="modal fade" id="dewan<?php echo $value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
													<div class="modal-dialog" role="document">
														<div class="modal-content">
															<div class="modal-header bg-info">
																<h5 class="modal-title" id="exampleModalLabel">This Row Will Be Remove</h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body">
																Are You Sure? apni ki</h2> k delete korte chan?
															</div>
															<div class="modal-footer">
																<?php if ($value['status']!=1){ ?>
																<a class="btn btn-info text-white" data-dismiss="modal" href="">No</a>
																<a class="btn btn-danger text-white" href="delete_testi.php?id=<?php echo $value['id'] ?>">Yes</a>
															<?php }else{ ?>
																<a class="btn btn-info text-white" data-dismiss="modal" href="">Ok</a>

															<?php } ?>
															</div>
														</div>
													</div>
												</div>
										</td>
									</tr>
									<?php } ?>
									
									
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		<?php require 'deshboard_part/footer.php' ?>
<!-- 		<script src="asset/datatable/js/jquery-2.2.4.min.js"></script>
		<script src="asset/datatable/js/bootstrap.min.js"></script>
		<script src="asset/datatable/plugin/js/jquery.dataTables.min.js"></script>
		<script src="asset/datatable/plugin/js/dataTables.bootstrap4.min.js"></script>
		<script src="asset/datatable/plugin/js/dataTables.buttons.min.js"></script>
		<script src="asset/datatable/plugin/js/buttons.colVis.min.js"></script>
		<script src="asset/datatable/plugin/js/buttons.bootstrap4.min.js"></script>
		<script src="asset/datatable/plugin/js/jszip.min.js"></script>
		<script src="asset/datatable/plugin/js/pdfmake.min.js"></script>
		<script src="asset/datatable/plugin/js/vfs_fonts.js"></script>
		<script src="asset/datatable/plugin/js/buttons.html5.min.js"></script>
		<script src="asset/datatable/plugin/js/buttons.print.min.js"></script>
		<script src="./asset/js/sweetalert2.min.js"></script> -->
		<script src="asset/datatable/js/custom.js"></script>

		<?php if (isset($_SESSION['deleteuser'])) { ?>			
			<script>
				swal("Deleted", "User Deleted Successful", "success");
			</script>
		<?php 
			unset($_SESSION['deleteuser']);
			}
		 ?>

		<script>
			function deleteuser(id, name){
				var userid = id;
				swal({
				  title: 'Are you sure?',
				  text: name +" will be deleted",
				  type: 'warning',
				  showCancelButton: true,
				  confirmButtonColor: '#3085d6',
				  cancelButtonColor: '#d33',
				  confirmButtonText: 'Yes, delete it!'
				}).then((result) => {
				  if (result.value) {
				   	window.location = "delete_user.php?id="+userid
				  }
				})
		};
		</script>

	</body>
</html>