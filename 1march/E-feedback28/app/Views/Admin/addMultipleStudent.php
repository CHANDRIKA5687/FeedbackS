<?= $this->extend('layout/admin') ?>
<?= $this->section("content") ?>
<h2>Multiple Upload</h2>
<div class="card">
    <div class="card-body">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        </head>

        <body class="page-login">
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
            <main class="container mt-4">
                <h2>Phpspreadsheet Tutorial

                    <span class="float-right">
                        <!-- <a class="btn btn-success" href="<?php echo base_url('home/spreadhseet_format_download');?>" -->
                            <!-- target="_blank">Download Excel Format</a> -->
                        <!-- <a class="btn btn-info" href="<?php echo base_url('home/spreadsheet_export');?>" -->
                        <!-- <a class="btn btn-info" href="<?php echo base_url('home/import');?>" -->

                            <!-- target="_blank">Download Excel Data</a> -->
                    </span>
                </h2>
                <hr>
             
                <form method="post" action="<?php echo base_url('spreadsheet_import');?>"
                    enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="file" name="upload_file" class="form-control" placeholder="Enter Name"
                            id="upload_file" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary">
                    </div>
                </form>
            </main><!-- Page Content -->

            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                crossorigin="anonymous"></script>

    </div>
</div>
<?= $this->endSection() ?>