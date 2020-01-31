<?php $this->start('head') ?>

<?php $this->end() ?>

<?php $this->start('body') ?>


<section id="post_job">
    <div class="container">
        <div class="vertical-space-40"></div>
        <h3 class="text-center">Post Your Job Here</h3>
    </div>
    <div class="vertical-space-51"></div>
    <div class="container">
      
        <div class="vertical-space-5"></div>
        <div class="job-post-box">
            <form method="post">
                <div class="form-group">
                    <label for="name">Job title</label>
                    <input type="text" class="form-control" id="name" name = "name" placeholder="Enter your job title" required />
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="company">Company</label>
                            <input type="text" class="form-control" id="company" name="company" placeholder="Full name of company" required />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="vacancies">Vacancies</label>
                            <input type="text" class="form-control" id="vacancies" name="vacancies" placeholder="Number of Vacancies" required />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group ">
                            <label>Company Logo</label>
                            <div class="box text-center">
                                <input type="file" name="file-5[]" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple />
                                <label for="file-5">
                                    <i>
                                        <img src="images/job-post.png" class="imtges" alt="">
                                    </i>
                                    <span>Drop your file here, or <i class="font-color-orange">Browse</i></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Document</label>
                            <div class="box text-center">
                                <input type="file" name="file-7[]" id="file-7" class="inputfile1 inputfile-4" data-multiple-caption="{count} files selected" multiple />
                                <label for="file-7">
                                    <i>
                                        <img src="images/job-post.png" class="imtges" alt="">
                                    </i>
                                    <span>Drop your file here, or <i class="font-color-orange">Browse</i></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="job_details">Short Description</label>
                    <textarea class="form-control small" id="job_details" name="job_details" placeholder="Write short description" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="description">Write full description</label>
                    <textarea class="form-control large" id="description" name="description" placeholder="Write short description" rows="3" required></textarea>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="skills">Skills</label>
                            <input type="text" class="form-control" id="skills" name="skills" placeholder="Skills" required />
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <label for="salary">Salary Range:</label>
                            <select class="form-control" id="salary" name="salary">
                                <option>60,000 - 80,000</option>
                                <option>80,000 - 100,000</option>
                                <option>100,000 - 125,000</option>
                                <option>125,000 - 150,000</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Agree with term and conditions</label>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input " id="exampleCheck1" required />
                        <label class="form-check-label text-left" for="exampleCheck1">I'am agreed with the any dicition take by the admin.</label>
                    </div>
                </div>
                <button type="submit" class="btn Post-Job-Offer">Post Job Offer</button>
            </form>
        </div>
    </div>
</section>
<?php $this->end() ?>