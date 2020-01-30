<?php

function dangerCard($error)
{

    $html = <<< EOT
     <div class="card border-danger mb-3" style="width:auto" id="waring">
    <!-- <div class="card-header">Warning</div> -->
    <div class="card-body text-danger">
        <h5 class="card-title">Warning</h5>
    EOT;
    foreach($error as $e){
        $html .= '<p class="card-text">'.$e.'</p>';
    }
    $html .=<<<EOT
       
    </div>
</div>;
EOT;
    return $html;
}

function jobCard()
{
    $html = <<< EOT
     <div class="card shadow-nohover" style="width:20rem;">
    <img class="card-img-top" src="https://allied-paper.co.uk/wp-content/uploads/2019/12/Job-Vacancy.jpg" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.
        </p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>;
EOT;

    return $html;
}
