<?php $target = currentUser()->target; 
$targetUser = new Job((int)$target);
?>
<?php $this->start('head') ?>
<?php $this->end() ?>

<?php $this->start('body') ?>



  <section id="intro">
    <div class="carousel-item active">
      <div class="carousel-background"><img src="<?= PROOT?>Images/slider1.jpg" alt=""></div>
      <div class="carousel-container">
        <div class="carousel-content">
          <h2 class="font-color-white">Job Details</h2>
          <p class="font-color-white width-100"><a href="" class="font-color-white">Home</a> </p>
        </div>
      </div>
    </div>
  </section>
  <section id="job-Details">
    <div class="container background-color-full-white job-Details">
      <div class="Exclusive-Product">
        <h3>We are looking for a <?= $targetUser->name ?></h3>
        <h6 class="font-color-orange"><?= $targetUser->company ?></h6>  <i class="material-icons">place</i> <span class="text">No 457, Union Place, Colombo</span>
        <h4>Short description</h4>
      <p><?= $targetUser->job_details ?></p>  
      </div>
      <div class="Job-Description">
        <h4>Job Description / Responsibility</h4>
        <p><?= $targetUser->skills ?></p>
        <div class="vertical-space-20"></div>
        <h4>Experience & Requirement</h4>
        <p><?= $targetUser->description ?></p>
        <section id="post_job">
          <div class="container">
            <div class="center">
              <div class="box text-center"> <input type="file" name="file-5[]" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple /> <label for="file-5"> <i> <img src="Images/job-post.png" class="imtges" alt=""> </i> <span>Drop your file here, or <i class="font-color-orange">Browse</i></span> </label> </div>
            </div>
            <div class="vertical-space-30"></div>
            <div class="text-center"> <a href="#" class="btn btn-info btn-lg"> <span class="glyphicon glyphicon-log-out"></span> Apply </a> </div>
          </div>
        </section>
      </div>
    </div>
  </section>

<?php $this->end() ?>