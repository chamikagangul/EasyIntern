<?php $this->start('head') ?>
<?php $this->end() ?>

<?php $this->start('body') ?>
<div class="col-md-6 col-md-offset-3 well">
  <form class="form" action="" method="post">
    <div class=""><?= $this->displayErrors ?>
    </div>
    <div class="form-group">
      <label for="fname">Name</label>
      <input type="text" id="fname" name="fname" class='form-control' value="<?= $this->post['fname'] ?>">
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" id="email" name="email" class='form-control' value="<?= $this->post['email'] ?>">
    </div>

    <div class="form-group">
      <label for="username">Choose a Username</label>
      <input type="text" id="username" name="username" class='form-control' value="<?= $this->post['username'] ?>">
    </div>

    <div class="form-group">
      <label for="password">Choose a Password</label>
      <input type="password" id="password" name="password" class='form-control' value="<?= $this->post['password'] ?>">
    </div>

    <div class="form-group">
      <label for="confirm">Confirm the Password</label>
      <input type="password" id="confirm" name="confirm" class='form-control' value="<?= $this->post['confirm'] ?>">
    </div>

    <p>Please select your preferred contact method:</p>
    <div>
      <input type="radio" id="radio1" name="acl" value="Student" checked>
      <label for="radio1">Student</label>
      <input type="radio" id="radio2" name="acl" value="Company">
      <label for="radio2">Company</label>
    </div>


    <div class='pull-right'>
      <input type="submit" value="Register" class='btn btn-primary btn-large'>
    </div>
  </form>
</div>
<?php $this->end() ?>