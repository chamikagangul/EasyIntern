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
                <form method="post">
                <div class=""><?= $this->displayErrors ?>
                    <div class="form-group"> <label for="nae">Name</label> 
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Company Name" value="<?= $this->post['name']?>" required /> </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group"> <label for="email">Email Address</label>
                             <input type="email" class="form-control" id="email" name="email"placeholder="Company Email" value="<?= $this->post['email']?>" required /> </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group"> <label for="address">Address</label>
                             <input type="text" class="form-control" id="address" name="address" placeholder="Company Address" value="<?= $this->post['address']?>" required /> </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group"> <label for="field">Field</label> 
                            <input type="text" class="form-control" id="field" name="field" placeholder="Field of the company" value="<?= $this->post['field']?>" required /> </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group"> <label for="contact">Contact Number</label> 
                            <input type="text" class="form-control" id="contact" name="contact" placeholder="Company Contact Number" value="<?= $this->post['contact']?>" required /> </div>
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
                    <div class="form-group"> <label for="details">Details</label> 
                    <textarea class="form-control small" id="details" name="details" placeholder="Write short description" rows="3" value="<?= $this->post['details']?>" required></textarea> </div> <button type="submit" class="btn Post-Job-Offer">Update Info</button>
                </form>
            </div>
        </div>
    </section>
    <?php $this->end() ?>


    
