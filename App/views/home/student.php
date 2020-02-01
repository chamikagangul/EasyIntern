<?php $this->setSiteTitle("Home"); ?>

<?php $this->start('head')?>

<?php $this->end()?>
<?php $this->start('body')?>

<section id="intro">
        <div class="carousel-item active">
            <div class="carousel-background"><img src="images/slider1.jpg" alt=""></div>
            <div class="carousel-container">
                <div class="carousel-content">
                    <h2 class="font-color-white">Welcome To Student Account</h2>
                </div>
                <div class="container">
                    <a href="<?=PROOT?>register/logout" class="btn btn-info btn-lg">
                        <span class="glyphicon glyphicon-log-out"></span> Log out
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div id="search-box">
        <div class="container search-box">
            <form action="#" id="search-box_search_form_3" class="search-box_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between ">
                <div class="d-flex flex-row align-items-center justify-content-start inline-block">
                    <span class="large material-icons search">search</span>
                    <input class="search-box_search_input" placeholder="Search Keyword" required="required" type="search">
                    <select class="dropdown_item_select search-box_search_input">
                        <option>Field</option>
                        <option>Electronic</option>
                        <option>TeleCommunication</option>
                        <option>Computer science</option>
                        <option>Electrical</option>
                        <option>civil</option>
                        <option>Mechanical</option>
                        <option>Material</option>
                        <option>Chemical</option>
                    </select>
                    <select class="dropdown_item_select search-box_search_input">
                        <option>Location</option>
                        <option>Local</option>
                        <option>Abroad</option>
                    </select>
                </div>
                <button type="submit" class="search-box_search_button">Search Jobs</button>
            </form>
        </div>
    </div>


    <section id="Job-Category">
        <div class="container">
            <h3 class="text-center">Choose Job Category</h3>
            <div class="vertical-space-30"></div>
            <p class="max-width">Choose the job category you want and check out the jobs
            </p>
            <div class="vertical-space-60"> </div>
            <div class="row">


            
            
                <div class="col-lg-3 col-md-6 max-width-50">
                    <div class="box background-color-white-light">
                        <div class="circle">
                            <img src="images/Electronics.jpg" style="width:120px;height:120px;" alt="">
                        </div>
                        <h6>Electronics</h6>
                        <a href="#" class="button job_post" data-hover="View Jobs" data-active="I'M ACTIVE"><span>25 Job
                                Posts</span></a>
                    </div>
                </div>















                <div class="col-lg-3 col-md-6 max-width-50">
                    <div class="box background-color-white-light">
                        <div class="circle">
                            <img src="images/telecommunication.jpg" style="width:120px;height:120px;" alt="">
                        </div>
                        <h6>Telecommunication</h6>
                        <a href="#" class="button job_post" data-hover="View Jobs" data-active="I'M ACTIVE"><span>32 Job
                                Posts</span></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 max-width-50">
                    <div class="box background-color-white-light">
                        <div class="circle">
                            <img src="images/CS.jpg" style="width:120px;height:120px;" alt="">
                        </div>
                        <h6>Computer Science</h6>
                        <a href="#" class="button job_post" data-hover="View Jobs" data-active="I'M ACTIVE"><span>56 Job
                                Posts</span></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 max-width-50">
                    <div class="box background-color-white-light">
                        <div class="circle">
                            <img src="images/EE2.jpg" style="width:120px;height:120px;" alt="">
                        </div>
                        <h6>Electrical</h6>
                        <a href="#" class="button job_post" data-hover="View Jobs" data-active="I'M ACTIVE"><span>18 Job
                                Posts</span></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 max-width-50">
                    <div class="box background-color-white-light">
                        <div class="circle">
                            <img src="images/Civil.jpg" style="width:120px;height:120px; ">
                        </div>
                        <h6>Civil</h6>
                        <a href='#' class="button job_post " data-hover="View Jobs " data-active="I 'M ACTIVE"><span>60 Job
                                Posts</span></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 max-width-50">
                    <div class="box background-color-white-light">
                        <div class="circle">
                            <img src="images/mech.jpg" style="width:120px;height:120px;" alt="">
                        </div>
                        <h6>Mechanical</h6>
                        <a href="#" class="button job_post" data-hover="View Jobs" data-active="I'M ACTIVE "><span>45 Job
                                Posts</span></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 max-width-50 margin-left-18 ">
                    <div class="box background-color-white-light ">
                        <div class="circle ">
                            <img src="images/Chemical.jpg " style="width:120px;height:120px; " alt=" ">
                        </div>
                        <h6>Chemical</h6>
                        <a href="# " class="button job_post " data-hover="View Jobs " data-active="I 'M ACTIVE"><span>15 Job
                                Posts</span></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 max-width-50">
                    <div class="box background-color-white-light ">
                        <div class="circle">
                            <img src="images/Metrial.jpg" style="width:120px;height:120px;" alt="">
                        </div>
                        <h6>Material</h6>
                        <a href="#" class="button job_post" data-hover="View Jobs" data-active="I'M ACTIVE "><span>12 Job
                                Posts</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="vertical-space-85 "></div>
    </section>


<?php $this->end()?>
