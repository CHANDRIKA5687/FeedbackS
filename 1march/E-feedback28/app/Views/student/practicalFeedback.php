<?= $this->extend('layout/student') ?>
<?= $this->section("content") ?>
<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" style="text-align:center">Practical Feedback</h4>
                <div class="content clearfix">
                <?php if (session('success')): ?>
                    <div class="alert alert-success" style="margin-top:5px;">
                        <?= session('success') ?>
                    </div>
                    <?php endif; ?>
                    <?php if (session('error')): ?>
                    <div class="alert alert-danger" style="margin-top:5px;">
                        <?= session('error') ?>
                    </div>
                    <?php endif; ?>
                    <form action="<?php echo base_url('savePracticalFeedback');?>" method="post">
                        <div class="conatiner" id="quest1">
                            <fieldset>
                                <tr>
                                    <th> Select Subject :</th>
                                    <td>
                                        <select name="fullForm" class="form-control">
                                            <option hidden>Select Subject</option>
                                            <?php foreach($subject as $f) : ?>
                                            <option name="fullForm" value="<?= $f['fullForm'];?>"><?= $f['fullForm'];?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                </table><br>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Comment</label>
                                        <input type="text" class="form-control" name="comment" id="joiningDate"
                                            required>
                                    </div>
                                </div>
                                <div class="button1" style="text-align:center;">
                                    <button type="submit" value="Submit" id="btn" style="align-item:center"
                                        class="btn btn-primary mr-2">Submit</button>
                                </div>
                        </div>
                    </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection() ?>