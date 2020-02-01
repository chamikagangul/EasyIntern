<?php $this->start('head') ?>
<?php $this->end() ?>

<?php $this->start('body') ?>
    <section id="post_job">
        <div class="container">
            <div class="vertical-space-40"></div>
            <h3 class="text-center">Company Details Update</h3>
        </div>
        <div class="vertical-space-50"></div>
        <div class="vertical-space-51"></div>
        <div class="container">
            <div class="job-post-box">
                <form>
                    <div class="form-group"> <label for="exampleInputJobtitle">Name</label> <input type="text" class="form-control" id="exampleInputJobtitle" placeholder="Enter Company Name" required /> </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group"> <label for="exampleInputCompany">Email Address</label> <input type="text" class="form-control" id="exampleInputCompany" placeholder="Company Email" required /> </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group"> <label for="exampleInputLoction">Address</label> <input type="text" class="form-control" id="exampleInputLoction" placeholder="Company Address" required /> </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group"> <label for="exampleInputCompany">Field</label> <input type="text" class="form-control" id="exampleInputCompany" placeholder="Field of the company" required /> </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group"> <label for="exampleInputLoction">Contact Number</label> <input type="text" class="form-control" id="exampleInputLoction" placeholder="Company Contact Number" required /> </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group "> <label>Company Logo</label>
                                <div class="box text-center"> <input type="file" name="file-5[]" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple /> <label for="file-5"> <i> <img src="images/job-post.png" class="imtges" alt=""> </i> <span>Drop your file here, or <i class="font-color-orange">Browse</i></span> </label> </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group"> <label>Document</label>
                                <div class="box text-center"> <input type="file" name="file-7[]" id="file-7" class="inputfile1 inputfile-4" data-multiple-caption="{count} files selected" multiple /> <label for="file-7"> <i> <img src="images/job-post.png" class="imtges" alt=""> </i> <span>Drop your file here, or <i class="font-color-orange">Browse</i></span> </label> </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group"> <label for="exampleInputShortDescription">Details</label> <textarea class="form-control small" id="exampleInputShortDescription" placeholder="Write short description" rows="3" required></textarea> </div> <button type="submit" class="btn Post-Job-Offer">Update Info</button>
                </form>
            </div>
        </div>
    </section>
    <?php $this->end() ?>
