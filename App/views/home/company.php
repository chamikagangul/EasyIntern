<?php $this->setSiteTitle("Home"); ?>

<?php $this->start('head') ?>

<?php $this->end() ?>
<?php $this->start('body') ?>

<script>
    $(function() {
        searchStudent();
        $('#btnSearch').click(function() {
            searchStudent();
        });
        $('#searchTag').change(function() {
            searchStudent();
        });
    });
</script>

<section id="intro">
    <div class="carousel-item active">
        <div class="carousel-background"><img src="images/slider1.jpg" alt=""></div>
        <div class="carousel-container">
            <div class="carousel-content">
                <h2 class="font-color-white">Welcome To Company Account</h2>
            </div>
            <div class="container">
                <a href="<?= PROOT ?>register/logout" class="btn btn-info btn-lg">
                    <span class="glyphicon glyphicon-log-out"></span> Log out
                </a>
            </div>
        </div>
    </div>
</section>

<div id="search-box">
    <div class="container search-box">
        <div class="d-flex flex-row align-items-center justify-content-start inline-block">

            <input class="search-box_search_input" placeholder="Search Keyword" required="required" type="search" id="searchTag">
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
        <button id='btnSearch' class="search-box_search_button">Search Applicants</button>

    </div>
</div>

<section id="Job-Category">
    <div class="container">
        <div class="vertical-space-50"></div>
        <h3 class="text-center">Find Job Applicants</h3>
        <div class="vertical-space-30"></div>
        <p class="max-width">Here you can find and choose the job applicants you want
        </p>
        <div class="vertical-space-60"> </div>
        <div class="row" id="StudentContainer">
            
        </div>
    </div>
    <div class="vertical-space-85 "></div>
</section>
<?php $this->end() ?>