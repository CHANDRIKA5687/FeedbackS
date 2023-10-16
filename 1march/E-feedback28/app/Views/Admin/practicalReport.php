<?= $this->extend('layout/admin') ?>
<?= $this->section("content") ?>

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
<div class="card row w-100 mx-0" style="">
    <div class="card-body">
        <div class="row">
            <form action="<?php echo base_url('practicalReport1');?>" method="post">
            <select id="branch">
                <option value="" hidden>Select Branch</option>
                <option value="CSE">CSE</option>
                <option value="">MECH</option>
                <option value="">CIVIL</option>
                <option value="">E&TC</option>
                <option value="">First Year</option>
            </select>
            <select name="class" id="class">
                <option value="" hidden>Select Class</option>
                <option value="">SY</option>
                <option value="1">TY</option>
                <option value="">BE</option>
            </select>
            <input type="submit" value="View Report">
            </form>          
        </div>
        <!-- <style>
        .rotate-right {
            transform: rotate(90deg);
        }
        </style> -->
    </div>
</div>
<?= $this->endSection() ?>