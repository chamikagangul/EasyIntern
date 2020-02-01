<?php $u = currentUser(); ?>
<?php $this->setSiteTitle("User Profile"); ?>


<?php $this->start('body')?>

    <section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
        <div class="container">
            <div class="row d-flex no-gutters">
                <div class="col-md-6 col-lg-6 d-flex">
                    <div class="img-about img d-flex align-items-stretch">
                        <div class="overlay"></div>
                        <div class="img d-flex align-self-stretch align-items-center" style="background-image:url(Images/Vega.jpg);"> </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 pl-md-5 py-5">
                    <div class="row justify-content-start pb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            <h2 class="mb-4">About Company</h2>
                            <p>This is an Introduction about Company</p>
                            <ul class="about-info mt-4 px-md-0 px-2">
                                <li class="d-flex"><span>Name:</span> <span><?= $u->name ?></span></li>
                                <li class="d-flex"><span>Address:</span> <span><?= $u->address ?></span></li>
                                <li class="d-flex"><span>Field:</span> <span><?= $u->field ?></span></li>
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
                    <h2 class="mb-4">Vega Innovations</h2>
                    <p><?= $u->details ?></p>
                </div>
            </div>
        </div>
    </section>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="js/main.js"></script>
<?php $this->end()?>