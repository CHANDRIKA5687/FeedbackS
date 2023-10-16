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
            <h4 class="card-title">Manage Student</h4>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>
                                sr no
                            </th>
                            <th>
                                Name
                            </th>
                            <th>email</th>
                            <th>
                              Mobile no
                            </th>
                            <th>
                               gender
                            </th>
                            <th>
                                Update
                            </th>
                            <th>
                                Delete
                            </th>
                        </tr>
                    </thead>
                   
                    <?php foreach($student as $row): ?>
    <tbody>
        <tr class="table-primary">
            <td><?= $i ?></td>
            <td><?= $row['fname']." ".$row['lname'] ?></td>
			<td><?= $row['email'] ?></td>
			<td><?= $row['mobile_no'] ?></td>
            <td><?= $row['gender'] ?></td>
			<td><a href="<?php echo base_url('student/edit/'.$row['id']);?>">Edit<span class='ti-pencil'style=color:green;></span></a></td>
			<td><a href="<?php echo base_url('student/delete/' . $row['id']);?>">Delete<span class='ti-trash' style=color:red;></span></a></td>
        </tr>
    </tbody>
	<?php 	$i++; endforeach; ?>
    
</table>
    </div>
        </div>
    </div>
</div> 
<?= $this->endSection() ?>
