<?= $this->extend('layout/admin') ?>
<?= $this->section("content") ?>
<div class="card row w-100 mx-0" style="">
    <div class="card-body">
        <h3 style="text-align:center;color:#000305;font-size: 35px;">Add Faculty </h3>
        <form class="forms-sample">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Faculty ID</label>
                            <input type="text" class="form-control" name="fid" id="exampleInputUsername1"
                                placeholder="Enter Faculty ID">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputUsername1">First Name</label>
                            <input type="text" class="form-control" name="fname" id="exampleInputUsername1"
                                placeholder="Enter First Name">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Middle Name</label>
                            <input type="text" class="form-control" name="mname" id="exampleInputUsername1"
                                placeholder="Enter Second Name">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Last Name</label>
                            <input type="text" class="form-control" name="lname" id="exampleInputUsername1"
                                placeholder="Enter Last Name">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Mobile Number</label>
                            <input type="text" class="form-control" name="phone" id="exampleInputUsername1"
                                placeholder="Enter Mobile Number">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Email</label>
                            <input type="email" class="form-control" name="email" id="exampleInputUsername1"
                                placeholder="Enter Email">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="pass" id="exampleInputPassword1"
                                placeholder="Enter Password">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Confirm Password</label>
                            <input type="password" class="form-control" name="confPass" id="exampleInputPassword1"
                                placeholder="Confirm Password">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Qualification</label>
                            <input type="text" class="form-control" name="qualification" id="exampleInputUsername1"
                                placeholder="Enter Qualification">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Experience</label>
                            <input type="text" class="form-control" name="experience" id="exampleInputUsername1"
                                placeholder="Enter Experience">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Designation</label>
                            <select class="form-control" id="exampleFormSelectClass" name="designation"
                                style="color:black">
                                <option hidden>Choose</option>
                                <option>Prof</option>
                                <option>HOD</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Address</label>
                            <input type="text" class="form-control" name="address" id="exampleInputUsername1"
                                placeholder="Enter Address">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Date of Birth</label>
                            <input type="date" class="form-control" name="dob" id="exampleInputUsername1">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Joining Date</label>
                            <input type="date" class="form-control" name="joiningDate" id="exampleInputUsername1">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Gender</label>
                            <div class="Container text-left">
                                <div class="row">
                                    <div class="col">
                                        <input type="radio" style="margin-left: 10px;" class="radio-button"
                                            name="gender" value="Male"> <span>Male</span>
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
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>