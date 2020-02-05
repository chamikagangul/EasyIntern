<?php $jobs = currentUser()->loadJobs(); ?>

<?php $this->setSiteTitle("Home"); ?>

<?php $this->start('head') ?>

<?php $this->end() ?>
<?php $this->start('body') ?>

<script>
    $(function() {
        searchJob();
        $('#btnSearch').click(function() {
            searchJob();
        });
        $('#searchTag').change(function() {
            searchJob();
        });
    });
</script>

<section id="intro">
    <div class="carousel-item active">
        <div class="carousel-background"><img src="images/slider1.jpg" alt=""></div>
        <div class="carousel-container">
            <div class="carousel-content">
                <h2 class="font-color-white">Welcome To Student Account</h2>
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
        <button id='btnSearch' class="search-box_search_button">Search Job</button>

    </div>
</div>


<section id="Job-Category">
    <div class="container">
        <h3 class="text-center">Choose Job Category</h3>
        <div class="vertical-space-30"></div>
        <p class="max-width">Choose the job category you want and check out the jobs
        </p>
        <div class="vertical-space-60"> </div>

        <div class="row" id="JobContainer">


        </div>
    </div>
    <div class="vertical-space-85 "></div>
</section>


<?php $this->end() ?>