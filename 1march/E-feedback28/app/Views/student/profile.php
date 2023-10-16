<?= $this->extend('layout/student') ?>
<?= $this->section("content") ?>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT3FwIlj1aY4Ck_GXpcp7wr8jHSghyWtoNfurmXQIsD&s" class="img-fluid">
        </div>
        <div class="col-md-9">
           
            <h1><?php echo $std[0]['fname']." ".$std[0]['lname']; ?></h1>
            <h2>Student</h2>
            <!-- <p>User's Bio</p> -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <h3>Contact Information</h3>
            <p>Email: <?php echo $std[0]['email']?></p>
            <p>Phone: <?php echo $std[0]['mobile_no']?></p>
            <!-- <p>Address: 123 Main St, Anytown USA</p> -->
        </div>
        <div class="col-md-4">
            <h3>Education</h3>
            <p>Branch: <?php echo $std[0]['branch']?></p>
            <p>PRN no: <?php echo $std[0]['prn_no']?></p>
        </div>
        <div class="col-md-4">
            <h3>Personal Information</h3>
            <p>Gender: <?php echo $std[0]['gender']?></p>
            <p>Date of Birth : <?php echo $std[0]['dob']?></p>
        </div>
    </div>
</div>
<style>
    .container {
    margin-top: 50px;
}

h1 {
    font-size: 36px;
}

h2 {
    font-size: 24px;
    font-weight: normal;
    margin-top: 10px;
}

p {
    font-size: 18px;
    line-height: 1.5;
    margin-top: 10px;
}

ul {
    list-style: none;
    padding: 0;
}

li {
    margin-top: 10px;
}

</style>
<?= $this->endSection() ?>