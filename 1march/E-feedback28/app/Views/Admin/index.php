<?= $this->extend('layout/admin') ?>
<?= $this->section("content") ?>
<div class="container text-center">
    <div class="row">
        <div class="col">
            <div class="card" style="background-color:#ffc107;color:;">
                <div class="card-body">
                    <div class="inner">
                        <h3>150</h3>
                        <p>Total Students</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="<?php echo base_url('showStudent');?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="background-color:#ffc107;color:white">
                <div class="card-body">
                    <div class="inner">
                        <h3>150</h3>
                        <p>Total faculty</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="<?php echo base_url('showFaculty');?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="background-color:#ffc107;color:white">
                <div class="card-body">
                    <div class="inner">
                        <h3>150</h3>
                        <p>Total Subjects</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="<?php echo base_url('ShowSubject');?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="background-color:#ffc107;color:white">
                <div class="card-body">
                    <div class="inner">
                        <h3>150</h3>
                        <p>Total Subjects</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="<?php echo base_url();?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
        <?= $this->endSection() ?>