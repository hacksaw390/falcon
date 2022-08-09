<?php require 'deshboard_part/header.php';
?>
<?php
require 'db.php';
	$select = "SELECT * FROM message ORDER BY id DESC";
	$select_result = mysqli_query($db, $select);
	$sl = 1;
	// $select = "SELECT * FROM message";
//    $result = mysqli_query($db, $select);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>All Messages</title>
		<link rel="stylesheet" href="./asset/datatable/css/bootstrap.min.css">
		<link rel="stylesheet" href="asset/datatable/plugin/css/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" href="asset/datatable/plugin/css/buttons.bootstrap4.min.css">
		<link rel="stylesheet" href="./asset/datatable/css/materialdesignicons.min.css">
		<link rel="stylesheet" href="./asset/css/font-awesome.min.css">
		<link rel="stylesheet" href="./asset/css/sweetalert2.min.css">
		<link rel="stylesheet" href="./asset/datatable/css/style.css">
		<link rel="stylesheet" href="./asset/css/style.css">
	</head>
	<body>
		
		<div class="content-wrapper">
			<div class="container-fluid mt-5">
				<form action="delete_message.php" method="post">
					<div class="row">
						<div class="col-lg-12">
							<div class="card bg-light mb-2">
								<div class="card-header text-white" style="background: linear-gradient(88deg, #13b4ca, #18cabe);"><h3>All Messages </h3></div>
								<div class="card-body">
									<div class="d-flex table-responsive mb-4">
										<div class="btn-group mr-2">
											<a class="btn btn-sm btn-info" href="index.php#contact"><i class="mdi mdi-plus-circle-outline"></i> Add</a>
										</div>
										<div class="btn-group mr-2">
											
											<button class="btn btn-light"><i class="mdi mdi-alert-circle-outline">Delete All Selected Items</i></button>
										</div>
									</div>
									
									<table id="myDataTable" class="order-column tabledesign  table table-bordered" style="width:100%; border-collapse: collapse!important;" cellpadding="0">
										<!-- table-striped ... table theke cate deya hoice -->
										<thead>
											<tr>
												<th>SELECT ALL <input type="checkbox" class="form-control" id="select_all"></th>
												<th>SERIAl</th>
												<th>POST ID</th>
												<th>SENDER NAME</th>
												<th>EMAIL</th>
												<th>MESSAGE</th>
												<th>ACTIVE TIME</th>
												<th>POST DATE</th>
												<th>IP ADDRESS</th>
												<th>PC NAME</th>
												<th>ACTION</th>
											</tr>
										</thead>
										<tbody>
											<!-- <?php
											function humanTiming($time){
											$time = time() - $time;     // to get the time since that moment
											$time = ($time<1)? 1 : $time;
											$tokens = array (
											60*60*24*30*12 => 'Year Ago',
											60*60*24*30 => 'Month Ago',
											60*60*24*7 => 'Week Ago',
											60*60*24 => 'Day Ago',
											60*60 => 'Hour Ago',
											60 => 'Minute Ago',
											1 => 'Second Ago'
											);
											foreach ($tokens as $unit => $text) {
											if ($time < $unit) continue;
											$numberOfUnits = floor($time / $unit);
											return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
											}
											}
											?> -->
											<?php foreach ($select_result as $value) {
												$d_time = $value['post_time'];
											$time_ago = timeAgo($d_time);
												// $post_time = $value['post_time'];
																	//       						$time_ago = humanTiming(strtotime($post_time));
											?>
											
											<tr style="<?= ($value['status']==0) ?'background: #c7c5c5;':'' ?>">
												<!-- <tr class="<?= ($value['status']==0) ?'bg-info':'' ?>"> -->
												<td><input value="<?php echo $value['id']?>" type="checkbox" class="form-control checkbox" name="id[]"></td>
												<td><?php echo $sl++  ?></td>
												<td><?php echo $value['id']  ?></td>
												<td><?php echo $value['msg_name']  ?></td>
												<td><?php echo $value['msg_email']  ?></td>
												<td width="30%"><?php echo substr($value['msg_desp'], 0,10).'<span style="color: blue;">Read More</span>'  ?></td>
												<td><?php echo $time_ago; ?></td>
												<td><?php echo $value['post_time']  ?></td>
												<td><?php echo $value['ip']  ?></td>
												<td><?php echo $value['pc_name']  ?></td>
												<td>
													<a href="single_message.php?id=<?php echo $value['id'] ?>" class="eye">
														<i class="fa fa-eye"></i>
													</a>
													<?php if($_SESSION['power']==1) { ?>
													<a href="javascript:;" class="trash" onclick="delete_mess(<?= $value['id'] ?>, '<?= $value['msg_name'] ?>')"><i class="fa fa-trash"></i></a>

												<?php }else{ ?>
													<a href="404.php" class="trash"><i class="fa fa-trash"></i></a>

											<?php } ?>
													<!-- Modal -->
													<!-- <div class="modal fade" id="shmaim<?php echo $value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
														<div class="modal-dialog" role="document">
															<div class="modal-content">
																<div class="modal-header bg-info">
																	<h5 class="modal-title" id="exampleModalLabel">This Row Will Be Remove</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	Are You Sure? apni ki <h2><?php $full_name = $value['fname'].' '.$value['lname']; echo $full_name  ?></h2> k delete korte chan?
																</div>
																<div class="modal-footer">
																	<a class="btn btn-info text-white" data-dismiss="modal" href="">No</a>
																	<a class="btn btn-danger text-white" href="delete_user.php?id=<?php echo $value['id'] ?>">Yes</a>
																</div>
															</div>
														</div>
													</div> -->
												</td>
											</tr>
											<?php } ?>
											
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<?php require 'deshboard_part/footer.php' ?>
		<!-- 		<script src="asset/datatable/js/jquery-2.2.4.min.js"></script>
		<script src="asset/datatable/js/bootstrap.min.js"></script> -->
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
		<script src="./asset/js/sweetalert2.min.js"></script>
		<script src="asset/datatable/js/custom.js"></script>
		<?php if (isset($_SESSION['delete_mess'])) { ?>
		<script>
			swal("Deleted", "Messages Deleted Successful", "success");
		</script>
		<?php
			unset($_SESSION['delete_mess']);
			}
		?>
		<script>
			function delete_mess(id, name){
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
					window.location = "delete_message.php?id="+userid
				}
				})
		};
		</script>
		<script>
			var select_all = document.getElementById("select_all"); //select all checkbox
			var checkboxes = document.getElementsByClassName("checkbox"); //checkbox items
			//select all checkboxes
			select_all.addEventListener("change", function(e){
				for (i = 0; i < checkboxes.length; i++) {
					checkboxes[i].checked = select_all.checked;
				}
			});
			for (var i = 0; i < checkboxes.length; i++) {
				checkboxes[i].addEventListener('change', function(e){ //".checkbox" change
					//uncheck "select all", if one of the listed checkbox item is unchecked
					if(this.checked == false){
						select_all.checked = false;
					}
					//check "select all" if all checkbox items are checked
					if(document.querySelectorAll('.checkbox:checked').length == checkboxes.length){
						select_all.checked = true;
					}
				});
			}
		</script>
	</body>
</html>