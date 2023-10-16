<?= $this->extend('layout/faculty') ?>
<?= $this->section("content") ?>
<style>
    .op1{
        margin:20px;
    }
</style>
<form action="<?php echo base_url('getReportFacultyWise');?>" method="post">
<div class="row">
<div class="selection" style="display:flex;margin-top:10px;">
	<div class="col" style="">
		<select class="form-control" >
			<option hidden>Select Branch</option>
			<option>CSE</option>
			<option>MECH</option>
			<option>E&TC</option>
			<option>CIVIL</option>
			<option>ELECT</option>
		</select>
	</div>
	<div class="col">
		<select class="form-control">
			<option hidden>Select Class</option>
			<option >Second Year</option>
			<option >Third Year</option>
			<option >Last Year</option>
		</select>
	</div>
	
	<div class="col" style="">
		<select  name="subjectName" class="form-control" >
			<option hidden>Select Subject</option>
			<option value="<?php echo $fullForm; ?>"><?php echo $fullForm; ?></option>
		</select>
	</div>
	<!-- </form> -->
	
	<!-- <form method="post"> -->
		<div class="col">

		
	<input type="submit" value="View Report" class="btn btn-success col-lg-4 mx-auto d-flex justify-content-center"
                                href="" style="width:250px;">

								</div>
	</form>
	

<?= $this->endSection() ?>
