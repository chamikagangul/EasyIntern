<?php $this->start('head') ?>
<?php $this->end() ?>

<?php $this->start('body') ?>
<div class="col-md-6 col-md-offset-3 well">
<form class="form" action="" method="post">
  <div class=""><?= $this->displayErrors?>
  </div>
  <div class="form-group">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="fname" class='form-control' value="<?= $this->post['fname']?>">
  </div>

  <div class="form-group">
    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lname" class='form-control' value="<?= $this->post['lname']?>">
  </div>
 

  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" id="email" name="email" class='form-control' value="<?= $this->post['email']?>">
  </div>

  <div class="form-group">
    <label for="date_of_birth">Date of birth</label>
    <input type="text" id="date_of_birth" name="date_of_birth" class='form-control' value="<?= $this->post['date_of_birth']?>">
  </div>

  <div class="form-group">
    <label for="field">Field</label>
    <input type="text" id="field" name="field" class='form-control' value="<?= $this->post['field']?>">
  </div>

  <div class="form-group">
    <label for="contact">Contact</label>
    <input type="text" id="contact" name="contact" class='form-control' value="<?= $this->post['contact']?>">
  </div>

  <div class="form-group">
    <label for="skills">Skills</label>
    <input type="text" id="skills" name="skills" class='form-control' value="<?= $this->post['skills']?>">
  </div>


  <div class='pull-right'>
    <input type="submit" value="Save" class='btn btn-primary btn-large'>
  </div>

</form>
</div>
<?php $this->end() ?>
