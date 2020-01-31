<?php $this->start('head') ?>
<?php $this->end() ?>

<?php $this->start('body') ?>
<div class="col-md-6 col-md-offset-3 well">
  <form class="form" action="" method="post">
    <div class=""><?= $this->displayErrors ?>
    </div>
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" class='form-control' value="">
    </div>


    <div class="form-group">
      <label for="skills">Skills</label>
      <input type="text" id="skills" name="skills" class='form-control' value="">
    </div>

    <div class="form-group">
      <label for="vacancies">Vacancies</label>
      <input type="text" id="vacancies" name="vacancies" class='form-control' value="">
    </div>

    <div class="form-group">
      <label for="salary">Salary</label>
      <input type="text" id="salary" name="salary" class='form-control' value="">
    </div>

    <div class="form-group">
      <label for="job_details">Job Details</label>
      <input type="text" id="job_details" name="job_details" class='form-control' value="">
    </div>

    <div class="form-group">
      <label for="description">Description</label>
      <input type="text" id="description" name="description" class='form-control' value="">
    </div>

    
    <div class='pull-right'>
      <input type="submit" value="Save" class='btn btn-primary btn-large'>
    </div>
  </form>
</div>
<?php $this->end() ?>