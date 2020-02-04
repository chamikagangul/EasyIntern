$(function () {
    $('#btnSearch').click(function () {
        search();
     });
     $('#searchTag').change(function () {
        search();
     });

    
});

function search(){
    tag = document.getElementById("searchTag").value;
    $.ajax({
        type: "POST",
        url: 'Search/index',
        data: {
            tag: tag
        },
        success: function (r) {
            r = JSON.parse(r);
            
            $('#jobContainer').html(createCards(r));
            console.log(createCards(r));
        }

    });
}

function createCards(data) {
    r = "";

    data.forEach(function (d) {
        console.log(d);
        r+=`<div class="col-lg-3 col-md-6 max-width-50">
            <div class="box background-color-white-light">
                <div class="circle">
                <img class="img d-flex align-self-stretch align-items-center"  src="data:image/jpeg;base64,'`+btoa( d._photo_ )+`"/>'
                </div>
                <h6>`+ d.name +`</h6>
                <a href="jobs/application" class="button job_post" data-hover="View Jobs"><span>Apply</span></a>
            </div>
        </div>`;
            
    
    });
    return r;

}








