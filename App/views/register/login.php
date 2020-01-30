<?php $this->setLayout('register'); ?>
<?php $this->start('head') ?>
<?php $this->end() ?>
<?php $this->start('body') ?>




<div class="container">
  <div class="d-flex justify-content-center h-100">
    <div class="card">
      <div class="card-header">
        <h3>Sign In</h3>
      </div>
      <div class="card-body">
        <form class="form" action="<?= PROOT ?>register/login" method="post">
          <div class="input-group form-group">
            <div class="input-group-prepend"> <span class="input-group-text"><i class="fas fa-user"></i></span> </div>
            <input type="text" name="username" id='username' class="form-control" placeholder="username or email">
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend"> <span class="input-group-text"><i class="fas fa-key"></i></span> </div>
            <input type="password" name="password" id='password' class="form-control" placeholder="password">
          </div>
          <div class="row align-items-center remember">
            <input type="checkbox" name="remember_me" id='remember_me' value="on">Remember Me </div>

          <div class="form-group">
            <input type="submit" value="Login" class="btn btn-large btn-primary">
          </div>


        </form>
      </div>
      <div class="card-footer">
        <div class="d-flex justify-content-center donthave">
          <h4>Don't have an account?</h4>
        </div>
        <div class="d-flex justify-content-center signup">
          <h3>Sign Up</h3>
        </div>
        <div class="d-flex justify-content-center"> <a href="#">As Candidate</a> </div>
        <div class="d-flex justify-content-center"> <a href="#">As Company</a> </div>
      </div>
    </div>
  </div>
</div>

<?php $this->end() ?>


