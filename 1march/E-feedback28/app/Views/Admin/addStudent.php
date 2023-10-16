<?= $this->extend('layout/admin') ?>
<?= $this->section("content") ?>
<div class="card row w-100 mx-0" style="">
    <div class="card-body">
        <h3 style="text-align:center;color:#000305;font-size: 35px;">Add Student </h3>
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
        <form class="forms-sample" action="<?php echo base_url('saveStudent1');?>" method="post">
            <div class="container">
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputUsername1">PRN Number</label>
                            <input type="text" class="form-control" name="prnNo" id="id"
                                placeholder="Enter PRN Number" required>
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
                            <input type="text" class="form-control"  name="mobile_no" id="phone"
                                placeholder="Enter 10 digit Mobile Number" required>
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
                            <input type="password" class="form-control" name="pass" id="pass"
                                placeholder="Enter Password" required>
                                <span id = "message" style="color:red"> </span> 
                        </div>
                        <!-- <div id="cpmsg" style="color:red;">
                          
                          <h6>*Password must contain (A lowercase & uppercase letter,A number & Min 8 chars) </h6>
                        </div>-->
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Confirm Password</label>
                            <input type="password" class="form-control" name="cpass" id="cpass"
                                placeholder="Confirm Password" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Branch</label>
                            <input type="text" class="form-control"  name="branch" id="branch"
                                placeholder="Enter your branch" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Class</label>
                            <input type="text" class="form-control" name="class" id="class"
                                placeholder="Enter your class" required>
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
                            <label for="exampleInputUsername1">Gender</label>
                            <div class="Container text-left">
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
                <!-- onclick="matchPassword()" -->
                <div class="button1" style="text-align:center;">
                    <button type="submit"  style="align-item:center" class="btn btn-primary mr-2">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
<?= $this->endSection() ?>