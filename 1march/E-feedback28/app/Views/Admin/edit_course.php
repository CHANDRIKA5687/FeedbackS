<?= $this->extend('layout/admin') ?>
<?= $this->section("content") ?>
<div class="container-scroller" style="margin-top: -60px;">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-6 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <h4 class="font-weight-dark" style="text-align:center">Edit Course Here</h4>
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
                        <?php foreach($course as $f) :?>
                        <form class="pt-3" action="<?php echo base_url('/course/update/(:any)');?>" method="post">
                            <div class="form-group">
                                <label for="shortform"><b>Branch</b></label>
                                <select class="form-control form-control-lg" id="branch"value="<?= $f['branch'] ?>" name="branch"
                                    style="color:black" required>
                                    <option hidden>Branch</option>
                                    <option value="fy">First Year Engineering Technology</option>
                                    <option value="cse">Computer Science & Technology</option>
                                    <option value="entc">Electronic & Telecommunication</option>
                                    <option value="civil">Civil Engineering</option>
                                    <option value="elect">Electrical Engineering</option>
                                    <option value="mech">Mechanical Engineering</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="shortform"><b>Semester</b></label>
                                <select class="form-control form-control-lg" id="sem"name="semester"
                                    style="color:black" required>
                                    <option hidden>Semester</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="shortform"><b>Class</b></label>
                                <select class="form-control form-control-lg" id="class" value="<?= $f['class'] ?>" name="class"
                                    style="color:black" required>
                                    <option hidden>Class</option>
                                    <option value="sy">Second Year</option>
                                    <option value="ty">Third Year</option>
                                    <option value="be">Last Year</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="courseid"><b>Course ID</b></label>
                                <input type="text" class="form-control form-control-lg" id="cid" value="<?= $f['subject_id'] ?>"
                                    placeholder="Course ID" name="courseid" required>
                            </div>

                            <div class="form-group">
                                <label for="fullform"><b>Full Form</b></label>
                                <input type="text" class="form-control form-control-lg" id="fullform" value="<?= $f['fullForm'] ?>"
                                    placeholder="Full Form" name="fForm" required>
                            </div>

                            <div class="form-group">
                                <label for="shortform"><b>Short Form</b></label>
                                <input type="text" class="form-control form-control-lg"value="<?= $f['shortForm'] ?>" id="sForm"
                                    placeholder="Short Form" name="sForm" required>
                            </div>



                            <div class="form-group">
                                <label for="totalweightage"><b>Total Weightage</b></label>
                                <input type="number" class="form-control form-control-lg" id="weightage"value="<?= $f['totalWeightage'] ?>"
                                    placeholder="Total Weightage" name="weightage" required>
                            </div>

                            <div class="form-group">
                              <label for="totalweightage"><b>Choose</b></label>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <input type="checkbox" name="theory" value="theory">Theory
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="checkbox" name="practical" value="practical">Practical
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="submit" value="Add Subject" class="btn btn-success col-lg-4 mx-auto d-flex justify-content-center"
                                >
                                <?php endforeach; ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>

<?= $this->endSection() ?>