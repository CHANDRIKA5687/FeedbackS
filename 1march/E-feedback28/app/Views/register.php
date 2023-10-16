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
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png');?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-8 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo" style="text-align:center">
                                <img src="<?php echo base_url('assets/images/spspm1.png');?>" alt="logo">
                            </div>

                            <h4 style="text-align:center">SKN Sinhgad College of Enginnering ,<br> Korti , Pandharpur
                            </h4><br>
                            <h3 class="font-weight-light" style="text-align:center">SIGN UP</h3>
                            <form class="pt-3" name="form" action="<?php echo base_url('saveStudent');?>" method="post">
                                <!-- *************************************************************** -->
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="fname"><b>First Name</b></label>
                                                <input type="text" class="form-control form-control-lg"
                                                    id="exampleInputUserFName" placeholder="First Name" name="fname"
                                                     required>
                                                <span id="error1"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="fname"><b>Middle Name</b></label>
                                                <input type="text" class="form-control form-control-lg"
                                                    id="exampleInputUserMName" placeholder="Middle Name" name="mname"
                                                    required>
                                                <span id="error2"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- *************************************************************************              -->
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="lname"><b>Last Name</b></label>
                                                <input type="text" class="form-control form-control-lg"
                                                    id="exampleInputUserLName" placeholder="Last Name" name="lname"
                                                    required>
                                                <span id="error3"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email"><b>Email</b></label>
                                                <input type="email" class="form-control form-control-lg"
                                                    id="exampleInputUserEmail" placeholder="Email" name="email"
                                                    required>
                                                <span id="error4"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ***********************************************************************8 -->

                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="password"><b>Passsword</b></label>
                                                <input type="password" class="form-control form-control-lg"
                                                    id="exampleInputUserPass" placeholder="Password" name="password"
                                                    required>
                                                <span id="error5"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="conpass"><b>Confirm Password</b></label>
                                                <input type="password" class="form-control form-control-lg"
                                                    id="exampleInputCPass" placeholder="Confirm Password" name="conpass"
                                                    required>
                                                <span id="error6"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- *********************************************************************************************************** -->
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="courseid"><b>Branch</b></label>
                                                <select class="form-control form-control-lg"
                                                    id="exampleFormSelectBranch" name="branch" style="color:black"
                                                    required>
                                                    <option>Branch</option>
                                                    <option name="branch" value="cse">Computer Scinece Engineering</option>
                                                    <option name="branch" value="mech">Mechanical Engineering</option>
                                                    <option name="branch" value="civil">CIVIL Engineering</option>
                                                    <option name="branch" value="entc">E&TC Engineering</option>
                                                    <option name="branch" value="elect">ELECTRICAL Engineering</option>
                                                </select>
                                                <span id="error7"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="class"><b>Class</b></label>
                                                <select class="form-control form-control-lg" id="exampleFormSelectClass"
                                                    name="class" style="color:black" required>
                                                    <option>Class</option>
                                                    <option name="class" value="sy">Second Year</option>
                                                    <option name="class" value="ty">Third Year</option>
                                                    <option name="class" value="be">BTech</option>
                                                </select>
                                                <span id="error8"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ************************************************************************************************* -->
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mobno"><b>Mobile Number</b></label>
                                                <input type="text" class="form-control form-control-lg" id="mobno"
                                                    placeholder="number can't start with 0" maxlength="10" name="mobno"
                                                    onblur="moblength()" pattern="[1-9]{1}[0-9]{9}" required>
                                                <span id="error9"></span>
                                            </div>
                                            <!-- <div id="message" style="color:green;">
                    <h6>*Password must contain (A lowercase & uppercase letter,A number & Min 8 chars) </h6></div>-->
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="prnno"><b>PRN Number</b></label>
                                                <input type="number" class="form-control form-control-lg" id="prnno"
                                                    onblur="prnlength()" placeholder="PRN Number" name="prnno" required>
                                                <span id="error10"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ************************************************************************************** -->
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="fname"><b>Date Of Birth</b></label>
                                                <input type="date" class="form-control form-control-lg" id="dob"
                                                    name="dob" required>
                                                <span id="error11"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="fname"><b>Gender</b></label>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col">
                                                            <input type="radio" name="gender" value="male">Female
                                                        </div>
                                                        <div class="col">
                                                            <input type="radio" name="gender" value="female">Male
                                                        </div>
                                                        <!-- <div class="col">
                                                            <input type="radio" name="gender" value="other=">Other
                                                        </div> -->  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ************************************************************************************************ -->
                                <div>
                                    <input type="submit" onclick="validateform()"
                                        class="btn btn-success col-lg-4 mx-auto d-flex justify-content-center" href="#">
                                </div>

                                <div class="text-center mt-4 font-weight-light">
                                    Already have an account? <a href="#" class="text-primary">Login</a>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
    //mobno validation
    function moblength() {
        var mob = document.getElementById("mobno");
        if (mob.value.length != 10) {
            error10.textContent = "Mobile number must be 10 digits!"
            error10.style.color = "red"
        } else {
            error10.textContent = ""
        }
    }


    function prnlength() {
        var prn = document.getElementById("prnno");
        if (prn.value.length != 16) {
            error9.textContent = "PRN number must be 16 digits!"
            error9.style.color = "red"
        } else {
            error9.textContent = ""
        }
    }

    function validateform() {
        // alert("hii");
        var fname = document.getElementById("fname");
         if (typeof fname == ‘number’) {
            error1.textContent = "name should be in letters only!"
            error1.style.color = "red"
         } else {
             error1.textContent = ""
        }
    }
    </script>

    <!-- </script> -->
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- endinject -->

</body>

</html>