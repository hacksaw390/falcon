<?php 

session_start();

?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/victory/pages/samples/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jun 2019 09:43:04 GMT -->
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <!-- Required meta tags -->
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Hacksaw Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="deshboard_asset/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="deshboard_asset/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="deshboard_asset/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="deshboard_asset/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="deshboard_asset/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="deshboard_asset/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth">
          <div class="row w-100">
            <div class="col-lg-8 mx-auto">
              <div class="row">
                <div class="col-lg-6 bg-white">
                  <div class="auth-form-light text-left p-5">
                    <h2>Login</h2>
                    <h4 class="font-weight-light">Hello! let's get started</h4>

                  <?php if (isset($_SESSION['log_err_msg'])) { ?>
                  <div id="exist" class="alert alert-danger" role="alert">
                    <h2><?php echo $_SESSION['log_err_msg']; ?> </h2>
                  </div>
                  <?php }  unset($_SESSION['log_err_msg']);?>

                    <form class="pt-5" action="login_post.php" method="post">
                        <div class="form-group">
                          <label for="exampleInputEmail1">E-mail</label>
                          <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">
                          <i class="mdi mdi-account"></i>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" name="pass" id="exampleInputPassword1" placeholder="Password">
                          <i class="mdi mdi-eye" onclick="Toggle()"></i>
                        </div>
                        <div class="mt-5">
                          <input type="submit" id="btn" value="Submit" name="submit" class="btn btn-info">
                        </div>
                        <div class="mt-3 text-center">
                          E-mail: admin@gmail.com <br>password: 123
                        </div>                 
                    </form>
                  </div>
                </div>
               <!--  <div class="col-lg-6 login-half-bg d-flex flex-row">
                  <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2018  All rights reserved.</p>
                </div> -->
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="deshboard_asset/js/off-canvas.js"></script>
  <script src="deshboard_asset/js/hoverable-collapse.js"></script>
  <script src="deshboard_asset/js/misc.js"></script>
  <script src="deshboard_asset/js/settings.js"></script>
  <script src="deshboard_asset/js/todolist.js"></script>
  <script>
     function Toggle() { 
            var temp = document.getElementById("exampleInputPassword1"); 
            if (temp.type === "password") { 
                temp.type = "text"; 
            } 
            else { 
                temp.type = "password"; 
            } 
        }
  </script>
  <!-- endinject -->
</body>


<!-- Mirrored from www.urbanui.com/victory/pages/samples/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jun 2019 09:43:04 GMT -->
</html>
