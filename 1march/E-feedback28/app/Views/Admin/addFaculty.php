<?= $this->extend('layout/admin') ?>
<?= $this->section("content") ?>
<div class="card row w-100 mx-0" style="">
    <div class="card-body">
        <h3 style="text-align:center;color:#000305;font-size: 35px;">Add Faculty </h3>
        <?php if (session('success')): ?>
                    <div class="alert alert-success" style="margin-top:5px;">
                        <?= session('success') ?>
                    </div>
                    <?php endif; ?>
                    <?php if (session('error')): ?>
                    <div class="alert alert-alert" style="margin-top:5px;">
                        <?= session('error') ?>
                    </div>
                    <?php endif; ?>
        <form class="forms-sample" onsubmit ="return validateForm()"  action="<?php echo base_url('saveFaculty');?>" method="post">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Faculty ID</label>
                            <input type="text" class="form-control" name="facultyId" id="fid"
                                placeholder="Enter Faculty ID" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputUsername1">First Name</label>
                            <input type="text" class="form-control" name="fname" id="fname"
                                placeholder="Enter First Name" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Middle Name</label>
                            <input type="text" class="form-control" name="mname" id="mname"
                                placeholder="Enter Second Name" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Last Name</label>
                            <input type="text" class="form-control" name="lname" id="lname"
                                placeholder="Enter Last Name" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Mobile Number</label>
                            <input type="text" class="form-control" pattern="[1-9]{1}[0-9]{9}" name="mobile_no" id="phone"
                                placeholder="Enter 10 digit Mobile Number (e.g. 7192502133)" required>
                        </div>
                       
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Email</label>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Enter Email" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="pass" id="psw"
                                placeholder="Enter Password e.g.(P23er122) " required>
                        </div>
                        
                        <div>
                        <span id = "message1" style="color:red"> </span>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Confirm Password</label>
                            <input type="password" class="form-control" name="cpass" id="cpass"
                                placeholder="Confirm Password" >
                        </div>
                        <div>
                        <span id = "message2" style="color:red"> </span>
                        </div>
                                            
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Qualification</label>
                            <input type="text" class="form-control" name="qualification" id="qualification"
                                placeholder="Enter Qualification" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Experience</label>
                            <input type="text" class="form-control" name="experience" id="experience"
                                placeholder="Enter Experience" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Designation</label>
                            <select class="form-control" id="designation" name="designation" required>
                                style="color:black" required>
                                <option hidden>Choose</option>
                                <option>Prof</option>
                                <option>HOD</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Address</label>
                            <input type="text" class="form-control" name="address" id="address"
                                placeholder="Enter Address" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Date of Birth</label>
                            <input type="date" class="form-control" name="dob" id="dob" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Joining Date</label>
                            <input type="date" class="form-control" name="joiningDate" id="joiningDate" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Gender</label>
                            <div class="Container text-left" required>
                                <div class="row">
                                    <div class="col">
                                        <input type="radio" style="margin-left: 10px;" class="radio-button"
                                            name="gender" value="Male" > <span>Male</span>
                                    </div>
                                    <div class="col">
                                        <input type="radio" class="radio-button" name="gender" value="Female"> <span>
                                            Female</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        Remember me
                    </label>
                </div>
                <div class="button1" style="text-align:center;">
                    <button type="submit" value="Submit" id="btn" style="align-item:center" class="btn btn-primary mr-2">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>


<script>
function validateForm() {
    //collect form data in JavaScript variables
    var pw1 = document.getElementById("pass").value;
    var pw2 = document.getElementById("cpass").value;
   
    // //check empty password field
    // if(pw1 == "") {
    //   document.getElementById("message1").innerHTML = "**Fill the password please!";
    //   return false;
    // }
  
    // //check empty confirm password field
    // if(pw2 == "") {
    //   document.getElementById("message2").innerHTML = "**Enter the password please!";
    //   return false;
    // } 
   
    //minimum password length validation
    if(pw1.length < 8) {
      document.getElementById("message1").innerHTML = "**Password length must be atleast 8 characters";
      return false;
    }

    //maximum length of password validation
    if(pw1.length > 15) {
      document.getElementById("message1").innerHTML = "**Password length must not exceed 15 characters";
      return false;
    }
  
    if(pw1 != pw2) {
      document.getElementById("message2").innerHTML = "**Passwords are not same";
      return false;
    } else {
      alert ("New Faculty Added Successfully");
      document.write("JavaScript form has been submitted successfully");
    }
 }



</script>

<?= $this->endSection() ?>
