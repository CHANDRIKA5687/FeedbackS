<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>E-Feedback</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url('assets/vendors/feather/feather.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendors/ti-icons/css/themify-icons.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendors/css/vendor.bundle.base.css')?>">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/vertical-layout-light/style.css');?>">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png');?>"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo" style="text-align:center">
                <img src="<?php echo base_url('assets/images/spspm1.png');?>" alt="logo">
              </div>
              <h4 style="text-align:center">SKN Sinhgad College of Enginnering ,<br> Korti , Pandharpur</h4>
              <h4 class="font-weight-light" style="text-align:center">Sign in to continue.</h4>
              <div class="alert alert-danger" role="alert"
                                <?php echo (session('error'))? '' : 'style="display:none"' ?>>
                                <?php echo session('error') ?>
                            </div>

                            <div class="alert alert-success" role="alert"
                                <?php echo (session('success'))? '' : 'style="display:none"' ?>>
                                <?php echo session('success') ?>
                            </div>
              <form class="pt-3" action="<?php echo base_url('Userlogin');?>" method="post">
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" name="email" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" name="password" placeholder="Password">
                </div>
                <div class="mt-3">
                  <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="SIGN IN">
                  <!-- <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="">SIGN IN</a> -->
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="register.html" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?php echo base_url('assets/vendors/js/vendor.bundle.base.js');?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?php echo base_url('assets/js/off-canvas.js');?>"></script>
  <script src="<?php echo base_url('assets/js/hoverable-collapse.js');?>"></script>
  <script src="<?php echo base_url('assets/js/template.js');?>"></script>
  <script src="<?php echo base_url('assets/js/settings.js');?>"></script>
  <script src="<?php echo base_url('assets/js/todolist.js');?>"></script>
  <!-- endinject -->
  <style>
.password-container {
  position: relative;
}

.password-container input {
  padding-right: 30px;
}

.password-container .toggle-password {
  position: absolute;
  right: 0;
  top: 50%;
  transform: translateY(-50%);
  cursor: pointer;
}

.password-container .toggle-password:before {
  content: "\1F441";
  font-size: 18px;
  color: #ccc;
}

.password-container .toggle-password.hide:before {
  content: "\1F442";
}
</style>
</body>

</html>
