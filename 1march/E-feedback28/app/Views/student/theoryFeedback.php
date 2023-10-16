<?= $this->extend('layout/student') ?>
<?= $this->section("content") ?>
<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" style="text-align:center">Theory Feedback</h4>
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
                    <form action="<?php echo base_url('saveFeedback');?>" method="post">
                        <div class="conatiner" id="quest1">
                            <fieldset>
                                <tr>
                                    <th> Select Subject :</th>
                                    <td>
                                        <select name="fullForm" class="form-control">
                                            <option hidden>Select Subject</option>
                                            <?php foreach($subject as $f) : ?>
                                            <option name="fullForm" value="<?= $f['fullForm'];?>"><?= $f['fullForm'];?> <?php endforeach; ?></option>
                                        </select>
                                    </td>
                                </tr>
                                </table>



                        </div>
                        <div class="feedback_main" id="fb" style="">
                            <div class="container" style=""><br>
                                <h4 style="text-align:center;color:skyblue">Choose Problem</h4>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input type="checkbox" name="feedback[]" id="np"
                                            value="np">&nbsp;&nbsp;&nbsp;&nbsp;No Problem
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" name="feedback[]" id="lowVoice"
                                            value="lowVoice">&nbsp;&nbsp;&nbsp;&nbsp;Low Voice
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" name="feedback[]" id="impBoard"
                                            value="impBoard">&nbsp;&nbsp;&nbsp;&nbsp;Improper
                                        Board Writing
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input type="checkbox" name="feedback[]" id="fastSyllabus"
                                            value="fastSyllabus">&nbsp;&nbsp;&nbsp;&nbsp;Fast Syllabus
                                        Cover
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" name="feedback[]" id="pEnglish"
                                            value="pEnglish">&nbsp;&nbsp;&nbsp;&nbsp;Poor English<br>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" name="feedback[]" id="pPreparation"
                                            value="pPreparation">&nbsp;&nbsp;&nbsp;&nbsp;Poor Preparation<br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input type="checkbox" name="feedback[]" id="lSyllabus"
                                            value="lSyllabus">&nbsp;&nbsp;&nbsp;&nbsp;Less Syllabus Cover
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" name="feedback[]" id="lackInteraction"
                                            value="lackInteraction">&nbsp;&nbsp;&nbsp;&nbsp;Lack of Interaction
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" name="feedback[]" id="wrongPro"
                                            value="wrongPro">&nbsp;&nbsp;&nbsp;&nbsp;Wrong Pronunciation
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input type="checkbox" name="feedback[]" id="doubtNotClear"
                                            value="doubtNotClear">&nbsp;&nbsp;&nbsp;&nbsp;Doubt not Cleared
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" name="feedback[]" id="lessExplination"
                                            value="lessExplination">&nbsp;&nbsp;&nbsp;&nbsp;Less Explanation
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" name="feedback[]" id="fastSpeaking"
                                            value="fastSpeaking">&nbsp;&nbsp;&nbsp;&nbsp;Fast Speaking
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <br>
                                <div class="form-group">
                                    <label for="exampleInputUsername1" style="font-size:20px">Comment</label>
                                    <input type="text" class="form-control" name="comment" id="comment"
                                        placeholder="Enter Any Comment" required>
                                </div>

                            </div>
                            <div class="button1" style="text-align:center;">
                                <button type="submit" style="align-item:center"
                                    class="btn btn-primary mr-2">Submit</button>
                                <!-- <input type="button" value="su"> -->
                            </div>
                    </form>
                    <script>
                    const mainCheckbox = document.getElementById('np');


                    mainCheckbox.onclick = function() {

                        const checkboxes = document.querySelectorAll('input[type=checkbox]');


                        for (let i = 0; i < checkboxes.length; i++) {
                            if (checkboxes[i] !== mainCheckbox) {
                                checkboxes[i].disabled = mainCheckbox.checked;
                            }
                        }
                    }
                    </script>
                    <style>
                    .parent {
                        display: flex;
                        flex-direction: row;
                    }

                    .child {
                        width: 33.3333%;
                        /* 100% / 3 */
                    }
                    </style>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection() ?>