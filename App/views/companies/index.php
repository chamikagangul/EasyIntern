<?php $data = currentUser()->loadCompanies() ?>

<?php $this->start('head') ?>
<?php $this->end() ?>

<?php $this->start('body') ?>


<section id="resent-job-post " class="background-color-white ">
    <div class="vertical-space-85 "></div>
    <div class="container text-center ">
        <h3 class="text-center ">Companies</h3>
        <div class="vertical-space-30 "></div>
        <p class="max-width ">Recently added Company details</p>
        <div class="vertical-space-60 "></div>






        <?php foreach ($data as $company => $details) : ?>
            <?php
            $data = [];
            foreach ($details as $key => $value) {
                $data[$key] = $value;
            }


             ?>
            <div class="detail ">
                <div class="media display-inline text-align-center "> <img src="images/Dialog.png " style="width:100px;height:70px; " alt="John Doe " class="mr-3 ">
                    <div class="media-body text-left text-align-center ">
                        <i class="large material-icons ">account_balance</i> <span class="text "><?= $data["name"]; ?></span> <br/>
                         <i class="large material-icons ">place</i> <span class="text font-size "><?= $data["address"]; ?></span> <br/>
                        <div class="float-right margin-top text-align-center "> <a href="# " class="part-full-time ">Full Time</a>
                            <p class="date-time ">Deadline: May 10, 2020</p>
                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>

    <div class="vertical-space-60 "></div>
</section>

<?php $this->end() ?>