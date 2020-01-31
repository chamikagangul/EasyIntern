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
                    <a href="#" class="btn btn-info btn-lg">
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


    <section id="resent-job-post " class="background-color-white ">
        <div class="vertical-space-85 "></div>
        <div class="container text-center ">
            <h3 class="text-center ">Recent Job Posts</h3>
            <div class="vertical-space-30 "></div>
            <p class="max-width ">Here is the recent Job updates
            </p>
            <div class="vertical-space-60 "></div>
            <div class="detail ">
                <div class="media display-inline text-align-center ">
                    <img src="images/Dialog.png " style="width:100px;height:70px; " alt="John Doe " class="mr-3 ">
                    <div class="media-body text-left text-align-center ">
                        <h6>Dialog Axiata PLC looking for a Network Engineer</h6>
                        <i class="large material-icons ">account_balance</i>
                        <span class="text ">Dialog Axiata PLC</span>
                        <br />
                        <i class="large material-icons ">place</i>
                        <span class="text font-size ">No 475,Union Place,Colombo</span>
                        <div class="float-right margin-top text-align-center ">
                            <a href="# " class="part-full-time ">Full Time</a>
                            <p class="date-time ">Deadline: May 10, 2020</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="detail ">
                <div class="media display-inline text-align-center ">
                    <img src="images/WSO2.png " style="width:100px;height:100px; " alt="John Doe " class="mr-3 ">
                    <div class="media-body text-left text-align-center ">
                        <h6>WSO2 needs Sofware Engineer</h6>
                        <i class="large material-icons ">account_balance</i>
                        <span class="text ">WSO2 PLC</span>
                        <br />
                        <i class="large material-icons ">place</i>
                        <span class="text font-size ">20, Palm Grove,Colombo 3</span>
                        <div class="float-right margin-top text-align-center ">
                            <a href="# " class="part-full-time ">Full Time</a>
                            <p class="date-time ">Deadline: Feb 23, 2020</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="detail ">
                <div class="media display-inline text-align-center ">
                    <img src="images/Maga.jpg " style="width:100px;height:100px; " alt="John Doe " class="mr-3 ">
                    <div class="media-body text-left text-align-center ">
                        <h6>Maga looking for a Civil Engineer </h6>
                        <i class="large material-icons ">account_balance</i>
                        <span class="text ">MAGA Engineering</span>
                        <br />
                        <i class="large material-icons ">place</i>
                        <span class="text font-size ">No 200, Nawala Road,Narahenpita</span>
                        <div class="float-right margin-top text-align-center ">
                            <a href="# " class="part-full-time ">Full Time</a>
                            <p class="date-time ">Deadline: May 23, 2020</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="detail ">
                <div class="media display-inline text-align-center ">
                    <img src="images/CEB.png " style="width:100px;height:70px; " alt="John Doe " class="mr-3 ">
                    <div class="media-body text-left text-align-center ">
                        <h6>CEB looking for Electrical Engineer</h6>
                        <i class="large material-icons ">account_balance</i>
                        <span class="text ">Ceylon Electricity Board</span>
                        <br />
                        <i class="large material-icons ">place</i>
                        <span class="text font-size "> No 50,Sir Chittampalam A Gardiner Mawatha,Colombo 2</span>
                        <div class="float-right margin-top text-align-center ">
                            <a href="# " class="part-full-time ">Full Time</a>
                            <p class="date-time ">Deadline: Feb 15, 2020</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="detail ">
                <div class="media display-inline text-align-center ">
                    <img src="images/Vega.jpg " style="width:100px;height:70px; " alt="John Doe " class="mr-3 ">
                    <div class="media-body text-left text-align-center ">
                        <h6>We need a Mechanical Engineer</h6>
                        <i class="large material-icons ">account_balance</i>
                        <span class="text ">VEGA Innovations</span>
                        <br />
                        <i class="large material-icons ">place</i>
                        <span class="text font-size ">Trace Lane, Colombo 01</span>
                        <div class="float-right margin-top text-align-center ">
                            <a href="# " class="part-full-time ">Part Time</a>
                            <p class="date-time ">Deadline: Apr 13, 2020</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vertical-space-20 "></div>
            <div class="job-list ">
                <ul class="pagination justify-content-end margin-auto ">
                    <li class="page-item "><a class="page-link pdding-none " href="javascript:void(0); "><i
                                class=" material-icons keyboard_arrow_left_right ">keyboard_arrow_left</i></a></li>
                    <li class="page-item "><a class="page-link active " href="javascript:void(0); ">1</a></li>
                    <li class="page-item "><a class="page-link " href="javascript:void(0); ">2</a></li>
                    <li class="page-item "><a class="page-link " href="javascript:void(0); ">3</a></li>
                    <li class="page-item "><a class="page-link " href="javascript:void(0); ">4</a></li>
                    <li class="page-item ">
                        <a class="page-link pdding-none " href="javascript:void(0); "> <i class=" material-icons keyboard_arrow_left_right ">keyboard_arrow_right</i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="vertical-space-60 "></div>
    </section>
<?php $this->end()?>
