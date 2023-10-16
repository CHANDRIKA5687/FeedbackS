<?= $this->extend('layout/admin') ?>
<?= $this->section("content") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
</head>

<body>
    <div class="container-scroller" style="margin-top: -70px;">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-6 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <h3 class="font-weight-light" style="text-align:center">Course Allocation</h3>
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
                            <form class="pt-3" action="<?php echo base_url('allocateCourse1');?>" method="post">
                                <div class="form-group">
                                    <?php
                                    # echo var_dump($subject);?>
                                    <select class="form-control form-control-lg" id="branch"
                                        name="branch" style="color:black">
                                        <option value="branch" hidden>Branch</option>
                                        <?php foreach($subject as $row): ?>
                                        <option value="cse"><?= $row['branch'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <!-- <div class="form-group">
                                    <select class="form-control form-control-lg" id="sem" name="sem"
                                        style="color:black">
                                        <option value="sem" hidden>Semester</option>
                                        <option value="first">First</option>
                                        <option value="second">Second</option>
                                    </select>
                                </div> -->
                                <div class="form-group">
                                    <select class="form-control form-control-lg" id="class"
                                        name="semester" style="color:black">
                                        <option value="hidden" hidden>Class</option>
                                        <?php foreach($subject as $row): ?>
                                        <option value="1"><?= $row['standard'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control form-control-lg" id="sem" name="courseId"
                                        style="color:black">
                                        <option value="sem" hidden>Course Id</option>
                                        <?php foreach($subject as $row): ?>
                                        <option value="<?= $row['courseId'] ?>"><?= $row['courseId'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control form-control-lg" id="facid"
                                        name="facultyId" style="color:black">
                                        <option hidden>Faculty ID</option>
                                        <?php foreach($faculty as $row): ?>
                                        <option value="<?= $row['id'] ?>"><?= $row['id'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="mt-3">
                                    <input type="submit" onclick="return validateform()"
                                        class="btn btn-success col-lg-4 mx-auto d-flex justify-content-center" href="#" />
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
</body>

</html>


<?= $this->endSection() ?>