<?php $this->setSiteTitle("Home"); ?>

<?php $this->start('head') ?>
<?php $this->end() ?>


<?php $this->start('body') ?>
<section id="post_job">
    <div class="container">
        <div class="vertical-space-40"></div>
        <h3 class="text-center">Student Details Update</h3>
    </div>
    <div class="vertical-space-50"></div>
    <div class="vertical-space-51"></div>
    <div class="container">
        <div class="job-post-box">
            <form method="post" enctype="multipart/form-data">
                <div class=""><?= $this->displayErrors ?>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group"> <label for="fname">First Name</label>
                                <input type="text" class="form-control" id="fname" name="fname" placeholder="Full name of company" required /> </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group"> <label for="lname">Last Name</label>
                                <input type="text" class="form-control" id="lname" name="lname" placeholder="Company Address" required /> </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group"> <label for="email">Email Address</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Full name of company" required /> </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group"> <label for="date_of_birth">Date of Birth</label>
                                <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" placeholder="Company Address" required /> </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group"> <label for="field">Field</label>
                                <input type="text" class="form-control" id="field" name="field" placeholder="Full name of company" required /> </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group"> <label for="contact">Contact Number</label>
                                <input type="text" class="form-control" id="contact" name="contact" placeholder="Company Address" required /> </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group "> <label>Profile Photo</label>
                                <div class="box text-center">
                                    <input type="file" name="profile_pic" id="profile_pic" class="inputfile inputfile-4" />
                                    <label for="profile_pic"> <i>
                                            <img src="<?= PROOT ?>images/job-post.png" class="imtges" alt="">
                                        </i>
                                        <span>Drop your file here, or <i class="font-color-orange">Browse</i></span> </label> </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group"> <label>CV</label>
                                <div class="box text-center">
                                    <input type="file" name="cv_file" id="cv_file" class="inputfile1 inputfile-4" />
                                    <label for="cv_file"> <i> <img src="<?= PROOT ?>images/job-post.png" class="imtges" alt=""> </i> <span>Drop your file here, or <i class="font-color-orange">Browse</i></span> </label> </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group"> <label for="skills">Skills</label>
                        <textarea class="form-control small" id="skills" name="skills" placeholder="Write short description" rows="3" required></textarea> </div>
                    <div class="form-group"> <label for="vision">Personal Mission Statement</label>
                        <textarea class="form-control large" id="vision" name="vision" placeholder="Write short description" rows="3" required>

                    </textarea> </div> <button type="submit" class="btn Post-Job-Offer">Update Info</button>
            </form>
        </div>
    </div>
</section>
<?php $this->end() ?>

