<?php $this->start('head') ?>
<?php $this->end() ?>

<?php $this->start('body') ?>
<div class="col-md-6 col-md-offset-3 well">
<form class="form" action="" method="post">
  <div class=""><?= $this->displayErrors?>
  </div>
  <div class="form-group">
    <label for="fname">Name</label>
    <input type="text" id="name" name="name" class='form-control' value="<?= $this->post['name']?>">
  </div>
 

  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" id="email" name="email" class='form-control' value="<?= $this->post['email']?>">
  </div>

  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" id="address" name="address" class='form-control' value="<?= $this->post['address']?>">
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
    <label for="details">Details</label>
    <input type="text" id="details" name="details" class='form-control' value="<?= $this->post['details']?>">
  </div>


  <div class='pull-right'>
    <input type="submit" value="Save" class='btn btn-primary btn-large'>
  </div>

</form>
</div>
<?php $this->end() ?>
