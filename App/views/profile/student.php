<?php $u = new Users((int)currentUser()->target); 

if($u->userType()!="LogedIn-Student"){
    Router::redirect('');
}
?>

<?php $this->setSiteTitle("User Profile"); ?>

<?php $this->start('head') ?>

<?php $this->end() ?>
<?php $this->start('body') ?>



<section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
    <div class="container">
        <div class="row d-flex no-gutters">
            <div class="col-md-6 col-lg-6 d-flex">
                <div class="img-about img d-flex align-items-stretch">
                    <div class="overlay"></div>
                    <div class="img d-flex align-self-stretch align-items-center" id="image" >
                    <?php echo '<img class="img d-flex align-self-stretch align-items-center"  src="data:image/jpeg;base64,'.base64_encode( $u->profile_pic ).'"/>'; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 pl-md-5 py-5">
                <div class="row justify-content-start pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        <h1 class="big">About</h1>
                        <h2 class="mb-4">About Applicant</h2>
                        <p>Small Introduction about Applicant(Personal mission statement)</p>
                        <ul class="about-info mt-4 px-md-0 px-2">
                            <li class="d-flex"><span>Name:</span> <span><?= $u->fname . " " . $u->lname ?></span></li>
                            <li class="d-flex"><span>Date of birth:</span> <span><?= $u->date_of_birth ?></span></li>
                            <li class="d-flex"><span>Department</span> <span><?= $u->field ?></span></li>
                            <li class="d-flex"><span>Email:</span> <span><?= $u->email ?></span></li>
                            <li class="d-flex"><span>Phone: </span> <span><?= $u->contact ?></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h1 class="big big-2">Contact</h1>
                <h2 class="mb-4">Skills</h2>
                <p><?= $u->skills ?></p>
            </div>
        </div>
        
    </div>
</section>


<script src="<?=PROOT?>js/jquery.min.js"></script>
<script src="<?=PROOT?>js/jquery-migrate-3.0.1.min.js"></script>

<script src="<?=PROOT?>js/jquery.waypoints.min.js"></script>
<script src="<?=PROOT?>js/jquery.stellar.min.js"></script>
<script src="<?=PROOT?>js/owl.carousel.min.js"></script>

<script src="<?=PROOT?>js/aos.js"></script>
<script src="<?=PROOT?>js/jquery.animateNumber.min.js"></script>
<script src="<?=PROOT?>js/scrollax.min.js"></script>

<script src="<?=PROOT?>js/main.js"></script>


<?php $this->end() ?>