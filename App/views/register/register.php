<?php $this->start('head') ?>
<?php $this->end() ?>

<?php $this->start('body') ?>
<section id="intro" class="intro_Signup">
    <div class="carousel-item active">
        <div class="carousel-background"><img src="<?= PROOT ?>images/slider1.jpg" alt=""></div>
    </div>
</section>
<section id="post_job" class="Post_job_Signup">
    <div class="container" id="Containerr">
        <div class="job-post-box">
        <div class=""><?= $this->displayErrors ?>
            <form id="Form" method="post">
                <div class="form-group">
                    <label for="fname">Name</label>
                    <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter your Name" required /> </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter your Email Address" required /> </div>
                <div class="form-group">
                    <label for="username">User Name</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter your User Name" required /> </div>
                <div class="form-group"> 
                    <label for="password">Password</label> 
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your Password" required /> </div>
                <div class="form-group">
                     <label for="confirm">Confirm Password</label> 
                     <input type="password" class="form-control" id="confirm" name="confirm" placeholder="Enter your Passworrd Again" required /> </div>
                <div class="form-group"> <label>Student</label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input " id="Student" name="acl" value="Student" required />
                        <label class="form-check-label text-left" for="Student">Student</label> </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input " id="Company" name="acl" value="Company" required />
                        <label class="form-check-label text-left" for="Company">Company</label> </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input " id="Admin" name="acl" value="Admin" required />
                        <label class="form-check-label text-left" for="Admin">Admin</label> </div>
                </div> <button type="submit" class="btn Post-Job-Offer">Register</button>
            </form>
        </div>
    </div>
</section>
<?php $this->end() ?>