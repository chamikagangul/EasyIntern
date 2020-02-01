<?php $this->setSiteTitle("Home"); ?>

<?php $this->start('head')?>

<?php $this->end()?>
<?php $this->start('body')?>

<section id="intro">
        <div class="carousel-item active">
            <div class="carousel-background"><img src="images/slider1.jpg" alt=""></div>
            <div class="carousel-container">
                <div class="carousel-content">
                    <h2 class="font-color-white">Welcome To Company Account</h2>
                </div>
                <div class="container">
                    <a href="<?=PROOT?>register/logout" class="btn btn-info btn-lg">
                        <span class="glyphicon glyphicon-log-out"></span> Log out
                    </a>
                </div>
            </div>
        </div>
    </section>

 

    <section id="Job-Category">
        <div class="container">
            <div class="vertical-space-50"></div>
            <h3 class="text-center">Find Job Applicants</h3>
            <div class="vertical-space-30"></div>
            <p class="max-width">Here you can find and choose the job applicants you want
            </p>
            <div class="vertical-space-60"> </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 max-width-50">
                    <div class="box background-color-white-light">
                        <div class="circle">
                            <img src="images/Electronics.jpg" style="width:120px;height:120px;" alt="">
                        </div>
                        <h6>Electronics</h6>
                        <a href="#" class="button job_post" data-hover="View applicants" data-active="I'M ACTIVE"><span>25 Job
                            Applicants</span></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 max-width-50">
                    <div class="box background-color-white-light">
                        <div class="circle">
                            <img src="images/telecommunication.jpg" style="width:120px;height:120px;" alt="">
                        </div>
                        <h6>Telecommunication</h6>
                        <a href="#" class="button job_post" data-hover="View applicants" data-active="I'M ACTIVE"><span>32 Job
                            Applicants</span></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 max-width-50">
                    <div class="box background-color-white-light">
                        <div class="circle">
                            <img src="images/CS.jpg" style="width:120px;height:120px;" alt="">
                        </div>
                        <h6>Computer Science</h6>
                        <a href="#" class="button job_post" data-hover="View applicants" data-active="I'M ACTIVE"><span>56 Job
                            Applicants</span></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 max-width-50">
                    <div class="box background-color-white-light">
                        <div class="circle">
                            <img src="images/EE2.jpg" style="width:120px;height:120px;" alt="">
                        </div>
                        <h6>Electrical</h6>
                        <a href="#" class="button job_post" data-hover="View applicants" data-active="I'M ACTIVE"><span>18 Job
                            Applicants</span></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 max-width-50">
                    <div class="box background-color-white-light">
                        <div class="circle">
                            <img src="images/Civil.jpg" style="width:120px;height:120px;">
                        </div>
                        <h6>Civil</h6>
                        <a href="# " class="button job_post " data-hover="View applicants " data-active="I 'M ACTIVE"><span>60 Job
                            Applicants</span></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 max-width-50">
                    <div class="box background-color-white-light">
                        <div class="circle">
                            <img src="images/mech.jpg" style="width:120px;height:120px;" alt="">
                        </div>
                        <h6>Mechanical</h6>
                        <a href="#" class="button job_post" data-hover="View applicants" data-active="I'M ACTIVE "><span>45 Job
                            Applicants</span></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 max-width-50 margin-left-18 ">
                    <div class="box background-color-white-light ">
                        <div class="circle ">
                            <img src="images/Chemical.jpg " style="width:120px;height:120px; " alt=" ">
                        </div>
                        <h6>Chemical</h6>
                        <a href="# " class="button job_post " data-hover="View applicants " data-active="I 'M ACTIVE"><span>15 Job
                            Applicants</span></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 max-width-50">
                    <div class="box background-color-white-light ">
                        <div class="circle">
                            <img src="images/Metrial.jpg" style="width:120px;height:120px;" alt="">
                        </div>
                        <h6>Material</h6>
                        <a href="#" class="button job_post" data-hover="View applicants" data-active="I'M ACTIVE "><span>12 Job
                            Applicants</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="vertical-space-85 "></div>
    </section>
<?php $this->end()?>
