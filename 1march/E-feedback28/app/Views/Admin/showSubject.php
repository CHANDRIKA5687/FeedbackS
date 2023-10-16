<?= $this->extend('layout/admin') ?>
<?= $this->section("content") ?>
<script type="text/javascript">
function deletes(id)
{
	a=confirm('Are You Sure To Remove This Record ?')
	 if(a)
     {
        window.location.href='delete_faculty.php?id='+id;
     }
}
</script>
<?php $i=1; ?>
<?php if (session('status')): ?>
    <div class="alert alert-success" style="margin-top:5px;">
        <?= session('status') ?>
    </div>
    <?php endif; ?>
    <?php if (session('error')): ?>
    <div class="alert alert-alert" style="margin-top:5px;">
        <?= session('error') ?>
    </div>
    <?php endif; ?>

    <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Manage Subject</h4>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>
                                sr no
                            </th>
                            <th>
                                Branch
                            </th>
                            <th>
                                Class
                            </th>
                            <th>
                                Semester
                            </th>
                            <th>
                               Course ID
                            </th>
                            <th>
                                Course Name
                            </th>
                            <th>
                                Weightage
                            </th>
                            <th>
                                Edit
                            </th>
                            <th>
                                Delete
                            </th>
                        </tr>
                    </thead>
                   
                    <?php foreach($course as $row): ?>
    <tbody>
        <tr class="table-primary">
            <td><?= $i ?></td>
            <td><?= $row['branch'] ?></td>
			<td><?= $row['standard'] ?></td>
			<td><?= $row['semester'] ?></td>
            <td><?= $row['courseId'] ?></td>
            <td><?= $row['fullForm'] ?></td>
            <td><?= $row['totalWeightage'] ?></td>
			<td><a href="<?php echo base_url('course/edit/'.$row['id']);?>">Edit<span class='ti-pencil'style=color:green;></span></a></td>
			<td><a href="<?php echo base_url('course/delete/' . $row['id']);?>">Delete<span class='ti-trash' style=color:red;></span></a></td>
        </tr>
    </tbody>
	<?php 	$i++; endforeach; ?>
    
</table>
    </div>
        </div>
    </div>
</div> 
<?= $this->endSection() ?>
