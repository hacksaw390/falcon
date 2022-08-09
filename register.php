<?php require 'deshboard_part/header.php' ?>

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
			<style>
				.form-check label .input-helper:before {
				    position: absolute;
				    content: "";
				    top: 2px;
				    width: 0px;
				    height: 0px;
				    border-radius: 0px;
				    left: 0;
				    border: 0px solid #f3f3f3;
				    -webkit-transition: all;
				    -o-transition: all;
				    transition: all;
				    transition-duration: 0s;
				    -webkit-transition-duration: 250ms;
				    transition-duration: 250ms;
					}
					.form-check label .input-helper:after {
					    position: absolute;
					    content: "";
					     top: 2px; 
					     width: 0px; 
					     height: 0px; 
					     border-radius: 0px; 
					    left: 0;
					    border: 0px solid #f3f3f3;
					    -webkit-transition: all;
					    -o-transition: all;
					    transition: all;
					    transition-duration: 0s;
					    -webkit-transition-duration: 250ms;
					    transition-duration: 250ms;
					}
			</style>

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
								<h2>Registration Form</h2>
							</div>

							<!-- Registration success msg -->
							
							<?php if (isset($_SESSION['success'])) { ?>
							<div class="alert alert-success" role="alert">
								<h2>
									<?php 
										echo $_SESSION['success']; 
										unset($_SESSION['fname']);
										unset($_SESSION['lname']);
										unset($_SESSION['uname']);
										unset($_SESSION['email']);
										unset($_SESSION['phone']);
										unset($_SESSION['pass']);
										unset($_SESSION['repass']);
										unset($_SESSION['date']);
										unset($_SESSION['gender']);
										unset($_SESSION['check']);
										unset($_SESSION['select']);
										unset($_SESSION['role']);
										unset($_SESSION['scheck']);
										unset($_SESSION['area']);
										?> 
								</h2>
							</div>
							<?php }  ?>

							<!-- email exist msg -->

							<?php if (isset($_SESSION['email_msg'])) { ?>
							<div id="exist" class="alert alert-danger" role="alert">
								<h2><?php echo $_SESSION['email_msg']; ?> </h2>
							</div>
							<?php }  unset($_SESSION['email_msg']);?>


							<form action="register_post.php" method="post" enctype="multipart/form-data">
								<div class="form-group">

										<div id="fnempty" class="text-danger text-left">
											<?php
												if (!empty($_GET['$fname_err'])) {
													echo $_GET['$fname_err'];
												}
											 ?>
										</div>

										<div class="text-danger text-right">
											<?php
												if (!empty($_GET['$lname_err'])) {
													echo $_GET['$lname_err'];
												}
											 ?>
										</div>

									<div class="form-row">
										<div class="col">
											<input value="<?= (isset($_SESSION['fname'])) ? $_SESSION['fname']:''; ?>" type="text" class="form-control " name="fname" placeholder="First name">
										</div>

										<div class="col">
											<input value="<?= (isset($_SESSION['lname'])) ? $_SESSION['lname']:''; ?>" type="text" class="form-control" name="lname" placeholder="Last name">
										</div>
									</div>
								</div>

									<div class="text-danger text-left p-0 m-0">
										<?php
											if (!empty($_GET['$uname_err'])) {
												echo $_GET['$uname_err'];
											}
										 ?>
									</div>

								<div class="form-group">
									<input  value="<?= (isset($_SESSION['uname'])) ? $_SESSION['uname']:''; ?>" type="text" name="uname" placeholder="User Name" class="form-control">
								</div>

									<div class="text-danger text-left p-0 m-0">
										<?php
											if (!empty($_GET['$email_err'])) {
												echo $_GET['$email_err'];
											}
										 ?>
									</div>

								<div class="form-group">
									<input  value="<?= (isset($_SESSION['email'])) ? $_SESSION['email']:''; ?>" type="text" name="email" placeholder="Email" class="form-control">
								</div>

									<div class="text-danger text-left p-0 m-0">
										<?php
											if (!empty($_GET['$phone_err'])) {
												echo $_GET['$phone_err'];
											}
										 ?>
									</div>

								<div class="form-group">
									<input value="<?= (isset($_SESSION['phone'])) ? $_SESSION['phone']:''; ?>" type="text" name="phone"   onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="14" minlength="11" placeholder="01XXXXXXXXX" class="form-control ">
								</div>

									<div class="text-danger text-left p-0 m-0">
										<?php
											if (!empty($_GET['$pass_err'])) {
												echo $_GET['$pass_err'];
											}
										 ?>
									</div>

								<div class="form-group">
									<input type="password" name="pass" placeholder="Password" class="form-control" value="">
								</div>

									<div class="text-danger text-left p-0 m-0">
										<?php
											if (!empty($_GET['$repass_err'])) {
												echo $_GET['$repass_err'];
											}
										 ?>
									</div>

								<div class="form-group">
									<input  type="password" name="repass" placeholder="Re-password" class="form-control" value="">
								</div>

									<div class="text-danger text-left p-0 m-0">
										<?php
											if (!empty($_GET['$date_err'])) {
												echo $_GET['$date_err'];
											}
										 ?>
									</div>

								<div class="input-group">
									<input value="<?= (isset($_SESSION['date'])) ? $_SESSION['date']:''; ?>" type="text" class="form-control" name="date"  placeholder="dd/mm/yyyy">
									<div class="input-group-append">
										<span class="input-group-text"><i class="fa fa-calendar"></i></span>
									</div>
								</div>

									<div class="text-danger text-left p-0 m-0">
										<?php
											if (!empty($_GET['$gender_err'])) {
												echo $_GET['$gender_err'];
											}
										 ?>
									</div>

								<hr>
								<?php if (isset($_SESSION['gender'])) {
									if ($_SESSION['gender']=='Male') { ?>
										<div class="form-group text-white mt-3">
										<label for="" class="mr-4 text-white">Select Your Gender : </label>

											<div class="form-check form-check-inline">
												<input   class="form-check-input ml-3 mr-1" type="radio" id="inlineRadio1" value="Male" name="gender" checked>
												<label class="form-check-label" for="inlineRadio1">Male</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input ml-3 mr-1" type="radio" id="inlineRadio2" value="Female" name="gender">
												<label class="form-check-label" for="inlineRadio2">Female</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input ml-3 mr-1" type="radio" id="inlineRadio3" value="Other" name="gender">
												<label class="form-check-label" for="inlineRadio3">Other</label>
											</div>
										</div> 
								<?php	}elseif ($_SESSION['gender']=='Female') { ?>
										<div class="form-group text-white mt-3">
										<label for="" class="mr-4 text-white">Select Your Gender : </label>

											<div class="form-check form-check-inline">
												<input   class="form-check-input ml-3 mr-1" type="radio" id="inlineRadio1" value="Male" name="gender">
												<label class="form-check-label" for="inlineRadio1">Male</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input ml-3 mr-1" type="radio" id="inlineRadio2" value="Female" name="gender" checked>
												<label class="form-check-label" for="inlineRadio2">Female</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input ml-3 mr-1" type="radio" id="inlineRadio3" value="Other" name="gender">
												<label class="form-check-label" for="inlineRadio3">Other</label>
											</div>
										</div>  
								<?php	}elseif ($_SESSION['gender']=='Other') { ?>
										<div class="form-group text-white mt-3">
										<label for="" class="mr-4 text-white">Select Your Gender : </label>

											<div class="form-check form-check-inline">
												<input   class="form-check-input ml-3 mr-1" type="radio" id="inlineRadio1" value="Male" name="gender">
												<label class="form-check-label" for="inlineRadio1">Male</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input ml-3 mr-1" type="radio" id="inlineRadio2" value="Female" name="gender" >
												<label class="form-check-label" for="inlineRadio2">Female</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input ml-3 mr-1" type="radio" id="inlineRadio3" value="Other" name="gender" checked>
												<label class="form-check-label" for="inlineRadio3">Other</label>
											</div>
										</div> 
								<?php }
									
								}else { ?>
									<div class="form-group text-white mt-3">
										<label for="" class="mr-4 text-white">Select Your Gender : </label>

										<div class="form-check form-check-inline">
											<input   class="form-check-input ml-3 mr-1" type="radio" id="inlineRadio1" value="Male" name="gender">
											<label class="form-check-label" for="inlineRadio1">Male</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input ml-3 mr-1" type="radio" id="inlineRadio2" value="Female" name="gender">
											<label class="form-check-label" for="inlineRadio2">Female</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input ml-3 mr-1" type="radio" id="inlineRadio3" value="Other" name="gender">
											<label class="form-check-label" for="inlineRadio3">Other</label>
										</div>
									</div> 
								<?php } ?>

								<div class="text-danger text-left p-0 m-0">
										<?php
											if (!empty($_GET['$check_err'])) {
												echo $_GET['$check_err'];
											}
										 ?>
									</div>

										<div class="text-danger">
											<?php
												if (!empty($_GET['$skills_err'])) {
													echo $_GET['$skills_err'];
												}
											 ?>
										</div>

								<div class="form-group text-white mt-3">
									<div class="form-row">
										<div class="col-2">
											
											<label for="" class="mr-4 text-white">Select Your Skill : </label>
										</div>
										<div class="col">
											<div class="form-check form-check-inline">
												<input <?php if(isset($_SESSION['check'])) { foreach($_SESSION['check'] as $selected) { if($selected == "HTML") { echo "checked=\"checked\""; break; }}} ?> class="form-check-input" value="HTML" name='check[]' type="checkbox" id="inlineCheckbox1">
												<label class="form-check-label" for="inlineCheckbox1">HTML</label>
											</div>
											<div class="form-check form-check-inline">
												<input <?php if(isset($_SESSION['check'])) { foreach($_SESSION['check'] as $selected) { if($selected == "CSS") { echo "checked=\"checked\""; break; }}} ?> class="form-check-input" value="CSS" name='check[]' type="checkbox" id="inlineCheckbox2">
												<label class="form-check-label" for="inlineCheckbox2">CSS</label>
											</div>
											<div class="form-check form-check-inline">
												<input  <?php if(isset($_SESSION['check'])) { foreach($_SESSION['check'] as $selected) { if($selected == "Java") { echo "checked=\"checked\""; break; }}} ?> class="form-check-input" value="Java" name='check[]' type="checkbox" id="inlineCheckbox3">
												<label class="form-check-label" for="inlineCheckbox3">Java</label>
											</div>
											<div class="form-check form-check-inline">
												<input  <?php if(isset($_SESSION['check'])) { foreach($_SESSION['check'] as $selected) { if($selected == "Python") { echo "checked=\"checked\""; break; }}} ?> class="form-check-input" value="Python" name='check[]' type="checkbox" id="inlineCheckbox4">
												<label class="form-check-label" for="inlineCheckbox4">Python</label>
											</div>
											<div class="form-check form-check-inline">
												<input  <?php if(isset($_SESSION['check'])) { foreach($_SESSION['check'] as $selected) { if($selected == "C++") { echo "checked=\"checked\""; break; }}} ?> class="form-check-input" value="C++" name='check[]' type="checkbox" id="inlineCheckbox5">
												<label class="form-check-label" for="inlineCheckbox5">C++</label>
											</div>
											<div class="form-check form-check-inline">
												<input  <?php if(isset($_SESSION['check'])) { foreach($_SESSION['check'] as $selected) { if($selected == "PHP") { echo "checked=\"checked\""; break; }}} ?> class="form-check-input" value="PHP" name='check[]' type="checkbox" id="inlineCheckbox6">
												<label class="form-check-label" for="inlineCheckbox6">PHP</label>
											</div>
											<div class="form-check form-check-inline">
												<input  <?php if(isset($_SESSION['check'])) { foreach($_SESSION['check'] as $selected) { if($selected == "C#") { echo "checked=\"checked\""; break; }}} ?> class="form-check-input" value="C#" name='check[]' type="checkbox" id="inlineCheckbox7">
												<label class="form-check-label" for="inlineCheckbox7">C#</label>
											</div>
											<div class="form-check form-check-inline">
												<input  <?php if(isset($_SESSION['check'])) { foreach($_SESSION['check'] as $selected) { if($selected == "Bootsrap") { echo "checked=\"checked\""; break; }}} ?> class="form-check-input" value="Bootsrap" name='check[]' type="checkbox" id="inlineCheckbox8">
												<label class="form-check-label" for="inlineCheckbox8">Bootsrap</label>
											</div>
											<div class="form-check form-check-inline">
												<input  <?php if(isset($_SESSION['check'])) { foreach($_SESSION['check'] as $selected) { if($selected == "Jquery") { echo "checked=\"checked\""; break; }}} ?> class="form-check-input" value="Jquery" name='check[]' type="checkbox" id="inlineCheckbox9">
												<label class="form-check-label" for="inlineCheckbox9">Jquery</label>
											</div>
										</div>
									</div>
									
								</div>

									<div class="text-danger text-left p-0 m-0">
										<?php
											if (!empty($_GET['$select_err'])) {
												echo $_GET['$select_err'];
											}
										 ?>
									</div>
								<div class="form-group">
									<select name="select[]" class="form-control" multiple="multiple">
										<option value="">Select Your Position</option>
										
										<option <?php if(isset($_SESSION['select'])) { foreach($_SESSION['select'] as $selected2) { if($selected2 == "Expart") { echo "selected=\"selected\""; break; }}} ?> value="Expart">Expart</option>
										<option <?php if(isset($_SESSION['select'])) { foreach($_SESSION['select'] as $selected2) { if($selected2 == "Medium") { echo "selected=\"selected\""; break; }}} ?> value="Medium">Medium</option>
										<option <?php if(isset($_SESSION['select'])) { foreach($_SESSION['select'] as $selected2) { if($selected2 == "New") { echo "selected=\"selected\""; break; }}} ?> value="New">New</option>
									</select>
								</div>

									<div class="text-danger text-left p-0 m-0">
										<?php
											if (!empty($_GET['$role_err'])) {
												echo $_GET['$role_err'];
											}
										 ?>
									</div>




									<div class="form-group">
											<?php 
												if (isset($_SESSION['role'])) {
													if ($_SESSION['role']=='') { ?>
														<select name="role" class="form-control">
															<option value="" selected>Select Your Role</option>
															<option value="1">Admin</option>
															<option value="2">Moderator</option>
															<option value="3">Editor</option>
														</select>
												<?php	}elseif ($_SESSION['role']==1) { ?>
														<select name="role" class="form-control">
															<option value="">Select Your Role</option>
															<option value="1" selected>Admin</option>
															<option value="2" >Moderator</option>
															<option value="3">Editor</option>
														</select>
												<?php	}elseif ($_SESSION['role']==2) { ?>
														<select name="role" class="form-control">
															<option value="">Select Your Role</option>
															<option value="1" >Admin</option>
															<option value="2" selected>Moderator</option>
															<option value="3">Editor</option>
														</select>
												<?php	}elseif ($_SESSION['role']==3) { ?>
														<select name="role" class="form-control">
															<option value="">Select Your Role</option>
															<option value="1" >Admin</option>
															<option value="2" >Moderator</option>
															<option value="3" selected>Editor</option>
														</select>
													
												<?php		}
													
												}else{ ?>

												<select name="role" class="form-control">
													<option value="">Select Your Role</option>
													<option value="1">Admin</option>
													<option value="2">Moderator</option>
													<option value="3">Editor</option>
												</select>
											<?php } ?>
									</div>

									<!-- optional -->
									<div class="form-group form-check">
										<?php 
											if (isset($_SESSION['scheck'])) {
												if ($_SESSION['scheck']=='done') { ?>
													<input type="checkbox" value="done" name="scheck" class="form-check-input" id="exampleCheck1" checked>
								    				<label class="form-check-label text-white" for="exampleCheck1">Check me out</label>
											<?php	}
											}else { ?>
												
								    		<input type="checkbox" value="done" name="scheck" class="form-check-input" id="exampleCheck1">
								    		<label class="form-check-label text-white" for="exampleCheck1">Check me out</label>
										<?php } ?>
								  	</div>
									<!-- optional -->

									<div class="text-danger text-left p-0 m-0">
										<?php
											if (!empty($_GET['$textarea_err'])) {
												echo $_GET['$textarea_err'];
											}
										 ?>
									</div>

									<div class="form-group">
										<textarea name="area" id="" cols="3" class="form-control" placeholder="Write Something About Yourself"><?=(isset($_SESSION['area'])) ? $_SESSION['area'] : ''; ?></textarea>
									</div>
									<div class="from-group pb-3" >
									<div class="text-white">
										<?php 
											if (isset($_SESSION['formet_erroe'])) { ?>

												<div class="alert alert-danger" role="alert">
													<?php echo $_SESSION['formet_erroe']; ?>
												</div>
												
												

											<?php }unset($_SESSION['formet_erroe']); ?>
									</div>
									<div class="text-white">
										<?php 
											if (isset($_SESSION['size_erroe'])) { ?>

												<div class="alert alert-danger" role="alert">
													<?php echo $_SESSION['size_erroe']; ?>
												</div>
												
												

											<?php }unset($_SESSION['size_erroe']); ?>
									</div>
										<input type="file" name="photo" id="image" onchange="loadfile(event)" class="form-control">
										<img src="" id="preimage" width="200" height="200" alt="">
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
			<script src="./asset/plugin/bootstrap/js/popper.min.js"></script>
			<script src="./asset/plugin/bootstrap/js/bootstrap.min.js"></script>
			<script src="./asset/js/bootstrap-datepicker.min.js"></script>
			<script src="./asset/js/sweetalert2.min.js"></script>
			<link rel="stylesheet" href="./asset/css/bootstrap-datepicker3.css">
			<script src="./asset/js/script.js"></script>
			<!--javascript for image preview-->
			<script type="text/javascript">
			    function loadfile(event) {
			        var output=document.getElementById('preimage');
			        output.src=URL.createObjectURL(event.target.files[0]);
			    }
			</script>
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
		unset($_SESSION['fname']);
		unset($_SESSION['lname']);
		unset($_SESSION['uname']);
		unset($_SESSION['email']);
		unset($_SESSION['phone']);
		unset($_SESSION['pass']);
		unset($_SESSION['repass']);
		unset($_SESSION['date']);
		unset($_SESSION['gender']);
		unset($_SESSION['check']);
		unset($_SESSION['select']);
		// unset($_SESSION['role']);
		unset($_SESSION['scheck']);
		unset($_SESSION['area']);
	 ?>
	</html>

