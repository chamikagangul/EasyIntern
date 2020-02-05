<?php
$jobId = currentUser()->target;
$job = new Job((int) $jobId);
?>
<?php $this->start('head') ?>
<?php $this->end() ?>

<?php $this->start('body') ?>



<section id="intro">
  <div class="carousel-item active">
    <div class="carousel-background"><img src="<?= PROOT ?>Images/slider1.jpg" alt=""></div>
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
      <h3>We are looking for a <?= $job->name ?></h3>
      <h6 class="font-color-orange"><?= $job->company ?></h6> <i class="material-icons">place</i> <span class="text">No 457, Union Place, Colombo</span>
      <h4>Short description</h4>
      <p><?= $job->job_details ?></p>
    </div>
    <div class="Job-Description">
      <h4>Job Description / Responsibility</h4>
      <p><?= $job->skills ?></p>
      <div class="vertical-space-20"></div>
      <h4>Experience & Requirement</h4>
      <p><?= $job->description ?></p>
      <section id="post_job">
        <form action="" method="post">
          <div class="container">
            <div class="vertical-space-30"> </div>
            <div class="text-center">
              <textarea class="form-control large" id="description" name="description" placeholder="Write short description about you" rows="3" required></textarea>

              <button type="submit" class="btn Post-Job-Offer">Apply</button>
            </div>
          </div>

        </form>

      </section>
    </div>
  </div>
</section>

<?php $this->end() ?>