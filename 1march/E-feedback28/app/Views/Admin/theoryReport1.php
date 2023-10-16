<?= $this->extend('layout/admin') ?>
<?= $this->section("content") ?>
<div class="card row w-100 mx-0" style="">
    <div class="card-body">
        <div class="row">
            <form action="<?php echo base_url('theoryReport1');?>" method="post">
                <select id="branch">
                    <option value="" hidden>Select Branch</option>
                    <option value="CSE">CSE</option>
                    <option value="">MECH</option>
                    <option value="">CIVIL</option>
                    <option value="">E&TC</option>
                    <option value="">First Year</option>
                </select>
                <select id="class">
                    <option value="" hidden>Select Class</option>
                    <option value="">SY</option>
                    <option value="1">TY</option>
                    <option value="">BE</option>
                </select>
                <input type="submit" value="View Report">
            </form>
        </div>
        <?php #$cnt=count($subject); 
        // echo count($feedback);
        // $fp=(count($feedback)/count($totalStudents))*100;
        // echo $fp;
        #echo "<script type='text/javascript'>alert($cnt);</script>";
        // echo count($totalStudents);
        // var_dump($cc['np']);
        ?>
        <table style="margin-top:30px">
            <tr>
                <td class=""></td>
                <?php foreach($subject as $row): ?>
                <td class=""><?php 
                        echo $row['fullForm']; ?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td class="">Total Students</td>
                <?php foreach($subject as $row): ?>
                <td class=""><?php echo $t1= count($totalStudents); ?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td class="">Total Feedbacks</td>
                <?php foreach($feedback as $row): ?>
                <td class=""><?php echo $d= $row; ?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td class="">Feedback Percentage</td>
                <?php foreach($feedper as $row): ?>
                <td class=""><?php echo $fpp=number_format($row, 2); ?>
                </td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td>No Problem</td>
                <?php  foreach($np as $row): ?>
                <td class=""><?php echo $np1= $row ?></td>
                <?php endforeach; ?>
            </tr>
           
            
            <tr>
                <td>Low Voice</td>
                <?php  foreach($lv as $row): ?>
                <td class=""><?php echo $row ?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td>Improper Board Writing</td>
                <?php  foreach($impbw as $row): ?>
                <td class=""><?php echo $row ?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td>Fast Syllabus</td>
                <?php  foreach($FastSylb as $row): ?>
                <td class=""><?php echo $row ?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td>Fast Speaking</td>
                <?php  foreach($Fs1 as $row): ?>
                <td class=""><?php echo $row ?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td>Poor English</td>
                <?php  foreach($pe as $row): ?>
                <td class=""><?php echo $row ?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td>Poor Preaparation</td>
                <?php  foreach($pp as $row): ?>
                <td class=""><?php echo $row ?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td>Less Syllabus Cover</td>
                <?php  foreach($ls as $row): ?>
                <td class=""><?php echo $row ?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td>Lack of Interaction</td>
                <?php  foreach($li as $row): ?>
                <td class=""><?php echo $row ?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td>Wrong Pronounction</td>
                <?php  foreach($wp as $row): ?>
                <td class=""><?php echo $row ?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td>Doubt Not Cleared</td>
                <?php  foreach($dnc as $row): ?>
                <td class=""><?php echo $row ?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td>Less Explanation</td>
                <?php  foreach($le as $row): ?>
                <td class=""><?php echo $row ?></td>
                <?php endforeach; ?>
            </tr>
        </table>
        <button onclick="window.print();">Print</button>
    </div>
</div>
<style>
.rotate-right {
    transform: rotate(90deg);
    transform-origin: top left;

}

table,
th,
td {
    border: 1px solid black;
    padding: 8px;
}
</style>

<?= $this->endSection() ?>