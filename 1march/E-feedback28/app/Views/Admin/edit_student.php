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
        <?php foreach($student as $f) :?>
        <form class="forms-sample" action="<?php echo base_url('saveStudent');?>" method="post">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputUsername1">PRN Number</label>
                            <input type="text" class="form-control" name="sid" id="id"
                                placeholder="Enter PRN Number" value="<?= $f['id'] ?>" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputUsername1">First Name</label>
                            <input type="text" class="form-control" name="fname" id="fname"
                                placeholder="Enter First Name" value="<?= $f['fname'] ?>" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Middle Name</label>
                            <input type="text" class="form-control" name="mname" id="mname"
                                placeholder="Enter Second Name" value="<?= $f['mname'] ?>" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Last Name</label>
                            <input type="text" class="form-control" name="lname" id="lname"
                                placeholder="Enter Last Name" value="<?= $f['lname'] ?>" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Mobile Number</label>
                            <input type="text" class="form-control"  name="mobile_no" id="phone"
                                placeholder="Enter 10 digit Mobile Number" value="<?= $f['mobile_no'] ?>" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Email</label>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Enter Email" value="<?= $f['email'] ?>" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="pass" id="pass"
                                placeholder="Enter Password" value="<?= $f['password'] ?>" required>
                                <span id = "message" style="color:red"> </span> 
                        </div>
                        <!-- <div id="cpmsg" style="color:red;">
                          
                          <h6>*Password must contain (A lowercase & uppercase letter,A number & Min 8 chars) </h6>
                        </div>-->
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Confirm Password</label>
                            <input type="password" class="form-control" name="confPass" id="cpass"
                                placeholder="Confirm Password" value="<?= $f['password'] ?>" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Branch</label>
                            <input type="text" class="form-control"  name="branch" id="branch"
                                placeholder="Enter your branch" value="<?= $f['branch'] ?>" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Class</label>
                            <input type="text" class="form-control" name="class" id="class"
                                placeholder="Enter your class" value="<?= $f['class'] ?>" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Date of Birth</label>
                            <input type="date" class="form-control" name="dob" id="dob" value="<?= $f['dob'] ?>" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Gender</label>
                            <div class="Container text-left">
                                <div class="row">
                                    <div class="col">
                                        <input type="radio" style="margin-left: 10px;" class="radio-button"
                                            name="gender" value="Male" value="<?= $f['gender'] ?>" > <span>Male</span>
                                    </div>
                                    <div class="col">
                                        <input type="radio" class="radio-button" name="gender" value="<?= $f['gender'] ?>" value="Female"> <span>
                                            Female</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="button1" style="text-align:center;">
                    <button type="submit" onclick="matchPassword()" style="align-item:center" class="btn btn-primary mr-2">Submit</button>
                </div>
            </div>
            <?php endforeach; ?>
        </form>
    </div>
</div>
</div>

<script>

<?= $this->endSection() ?>