<?php require 'deshboard_part/header.php' ?>
<?php
require 'db.php';
$id = $_GET['id'];
	$select = "SELECT * FROM users WHERE id=$id";
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
			<!-- <link rel="stylesheet" href="./asset/sweetalert2.min.css"> -->
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
							<div class="col-lg-12 m-auto bg-secondary  py-1" >
								<div class="text-center text-white py-2 my-2 bg-info" style="background: linear-gradient(88deg, #13b4ca, #18cabe);">
									<h2>Edit User</h2>
								</div>
								<div class="text-success text-center">
									<h3>
									<?php
										if (!empty($_GET['$success'])) {
											echo $_GET['$success'];
										}
									?>
									</h3>
								</div>
								<form action="update_user.php" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<div class="text-danger text-right">
											<?php
												if (isset($_SESSION['name_error'])) {
													echo $_SESSION['name_error'];
												}
												unset($_SESSION['name_error']);
											?>
										</div>
										<div class="form-group">
											<input type="hidden" name="id" placeholder="User Name" class="form-control" value="<?php echo $catch_user['id'] ?>">
										</div>
										<div class="form-row">
											<div class="col">
												<input type="text" class="form-control " name="fname" placeholder="First name" value="<?php echo $catch_user['fname'] ?>">
											</div>
											<div class="col">
												<input type="text" class="form-control" name="lname" placeholder="Last name" value="<?php echo $catch_user['lname'] ?>">
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
										<input type="text" name="uname" placeholder="User Name" class="form-control" value="<?php echo $catch_user['uname'] ?>">
									</div>
									<div class="text-danger text-left p-0 m-0">
										<?php
											if (!empty($_GET['$phone_err'])) {
												echo $_GET['$phone_err'];
											}
										?>
									</div>
									<div class="form-group">
										<input type="text" name="phone"  onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="14" minlength="11" placeholder="01XXXXXXXXX" class="form-control" value="<?php echo $catch_user['phone'] ?>">
									</div>
									<div class="text-danger text-left p-0 m-0">
										<?php
											if (!empty($_GET['$date_err'])) {
												echo $_GET['$date_err'];
											}
										?>
									</div>
									<div class="input-group">
										<input type="text" class="form-control" name="date"  placeholder="dd/mm/yyyy" value="<?php echo $catch_user['dob'] ?>">
										<div class="input-group-append">
											<span class="input-group-text"><i class="fa fa-calendar"></i></span>
										</div>
									</div>
									<div class="text-danger p-0 m-0">
										<?php
											if (!empty($_GET['$gender_err'])) {
												echo $_GET['$gender_err'];
											}
										?>
									</div>
									<div class="form-group text-white mt-3">
										<label for="" class="mr-4 text-white">Select Your Gender : </label>
										<div class="form-check form-check-inline">
											<input <?=($catch_user['gender']=='Male')?'checked':''; ?> class="form-check-input ml-3 mr-1" type="radio" id="inlineRadio1" value="Male"  name="gender">
											<label class="form-check-label" for="inlineRadio1">Male</label>
										</div>
										<div class="form-check form-check-inline">
											<input <?=($catch_user['gender']=='Female')?'checked':''; ?> class="form-check-input ml-3 mr-1" type="radio" id="inlineRadio2" value="Female" name="gender">
											<label class="form-check-label" for="inlineRadio2">Female</label>
										</div>
										<div class="form-check form-check-inline">
											<input <?=($catch_user['gender']=='Other')?'checked':''; ?> class="form-check-input ml-3 mr-1" type="radio" id="inlineRadio3" value="Other" name="gender">
											<label class="form-check-label" for="inlineRadio3">Other</label>
										</div>
									</div>
									<hr>
									<div class="text-danger text-right">
										<?php
											if (isset($_SESSION['skills_error'])) {
												echo $_SESSION['skills_error'];
											}
											unset($_SESSION['skills_error']);
										?>
									</div>
									<div class="form-group text-white mt-3">
										<div class="form-row">
											<div class="col-4">
												
												<label for="" class="mr-4 text-white">Select Your Skill : </label>
											</div>
											<div class="col">
												<div class="form-check form-check-inline">
													<input <?php if (preg_match("/HTML/", $catch_user['skill'])) { echo "checked";} else {echo "";} ?> class="form-check-input" value="HTML" name='check[]' type="checkbox" id="inlineCheckbox1">
													<label class="form-check-label" for="inlineCheckbox1">HTML</label>
												</div>
												<div class="form-check form-check-inline">
													<input <?php if (preg_match("/CSS/", $catch_user['skill'])) { echo "checked";} else {echo "";} ?> class="form-check-input" value="CSS" name='check[]' type="checkbox" id="inlineCheckbox2">
													<label class="form-check-label" for="inlineCheckbox2">CSS</label>
												</div>
												<div class="form-check form-check-inline">
													<input <?php if (preg_match("/Java/", $catch_user['skill'])) { echo "checked";} else {echo "";} ?> class="form-check-input" value="Java" name='check[]' type="checkbox" id="inlineCheckbox3">
													<label class="form-check-label" for="inlineCheckbox3">Java</label>
												</div>
												<div class="form-check form-check-inline">
													<input <?php if (preg_match("/Python/", $catch_user['skill'])) { echo "checked";} else {echo "";} ?> class="form-check-input" value="Python" name='check[]' type="checkbox" id="inlineCheckbox4">
													<label class="form-check-label" for="inlineCheckbox4">Python</label>
												</div>
												<div class="form-check form-check-inline">
													<input <?php if (preg_match("/C++/", $catch_user['skill'])) { echo "checked";} else {echo "";} ?> class="form-check-input" value="C++" name='check[]' type="checkbox" id="inlineCheckbox5">
													<label class="form-check-label" for="inlineCheckbox5">C++</label>
												</div>
												<div class="form-check form-check-inline">
													<input <?php if (preg_match("/PHP/", $catch_user['skill'])) { echo "checked";} else {echo "";} ?> class="form-check-input" value="PHP" name='check[]' type="checkbox" id="inlineCheckbox6">
													<label class="form-check-label" for="inlineCheckbox6">PHP</label>
												</div>
												<div class="form-check form-check-inline">
													<input <?php if (preg_match("/C#/", $catch_user['skill'])) { echo "checked";} else {echo "";} ?> class="form-check-input" value="C#" name='check[]' type="checkbox" id="inlineCheckbox7">
													<label class="form-check-label" for="inlineCheckbox7">C#</label>
												</div>
												<div class="form-check form-check-inline">
													<input <?php if (preg_match("/Bootsrap/", $catch_user['skill'])) { echo "checked";} else {echo "";} ?> class="form-check-input" value="Bootsrap" name='check[]' type="checkbox" id="inlineCheckbox8">
													<label class="form-check-label" for="inlineCheckbox8">Bootsrap</label>
												</div>
												<div class="form-check form-check-inline">
													<input <?php if (preg_match("/Jquery/", $catch_user['skill'])) { echo "checked";} else {echo "";} ?> class="form-check-input" value="Jquery" name='check[]' type="checkbox" id="inlineCheckbox9">
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
											<option  <?php if (preg_match("/Expart/", $catch_user['position'])) { echo "selected";} else {echo "";} ?> value="Expart">Expart</option>
											<option  <?php if (preg_match("/Medium/", $catch_user['position'])) { echo "selected";} else {echo "";} ?> value="Medium">Medium</option>
											<option  <?php if (preg_match("/New/", $catch_user['position'])) { echo "selected";} else {echo "";} ?> value="New">New</option>
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
										<select name="role" class="form-control">
											<option value="">Select Your Role</option>
											<option value="1" <?=($catch_user['role']==1)?'selected' : '' ?> >Admin</option>
											<option value="2" <?=($catch_user['role']==2)?'selected' : '' ?> >Moderator</option>
											<option value="3" <?=($catch_user['role']==3)?'selected' : '' ?> >Editor</option>
										</select>
									</div>
									<div class="text-danger text-left p-0 m-0">
										<?php
											if (!empty($_GET['$textarea_err'])) {
												echo $_GET['$textarea_err'];
											}
										?>
									</div>
									<div class="form-group">
										<textarea  name="textarea" rows="3" class="form-control" placeholder="Write Something About Yourself"><?php echo $catch_user['about'] ?></textarea>
									</div>
									<div class="form-group">
										<p class="text-white">Resent Photo</p>
										<input type="file" name="photo" class="form-control mb-2" id="image" onchange="loadfile(event)">
										<img src="uploads/users./<?php echo $catch_user['photo'] ?>" alt="" id="preimage" width="200" height="200">
									</div>
									<div class="form-group">
										<input type="submit" id="btn" value="Update Info" name="btn" class="btn btn-info">
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
			
			<script src="./asset/js/jquery-1.12.4.min.js"></script>
			<script src="./asset/plugin/bootstrap/js/popper.min.js"></script>
			<script src="./asset/plugin/bootstrap/js/bootstrap.min.js"></script>
			<script src="./asset/js/bootstrap-datepicker.min.js"></script>
			<!-- <script src="./asset/js/sweetalert2.min.js"></script> -->
			<link rel="stylesheet" href="./asset/css/bootstrap-datepicker3.css">
			<script src="./asset/js/script.js"></script>
			<!--javascript for image preview-->
			<script type="text/javascript">
			function loadfile(event) {
			var output=document.getElementById('preimage');
			output.src=URL.createObjectURL(event.target.files[0]);
			}
			</script>
		</body>
	</html>