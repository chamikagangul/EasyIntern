

function searchStudent(){
    tag = document.getElementById("searchTag").value;
    $.ajax({
        type: "POST",
        url: 'Search/student',
        data: {
            tag: tag
        },
        success: function (r) {
            r = JSON.parse(r);    
            $('#StudentContainer').html(createStudentCards(r));
        }

    });
}

function searchJob() {
    tag = document.getElementById("searchTag").value;
    $.ajax({
        type: "POST",
        url: 'Search/job',
        data: {
            tag: tag
        },
        success: function (r) {
            r = JSON.parse(r);
            $('#JobContainer').html(createJobCards(r));
        }
    });
}


function createJobCards(data) {
    r = "";

    data.forEach(function (d) {
        console.log(d);
        r+=`<div class="col-lg-3 col-md-6 max-width-50">
            <div class="box background-color-white-light">
                <div class="circle">
                <img class="img d-flex align-self-stretch align-items-center" style="width:120px;height:120px;" src="data:image/jpeg;base64,`+d.profile_pic+`"/>'
                </div>
                <h6>`+ d.name +`</h6>
                <a href="jobs/application/`+d.id+`" class="button job_post" data-hover="View Jobs"><span>Apply</span></a>
            </div>
        </div>`;
            
    
    });
    return r;

}

function createStudentCards(data) {
    r = "";

    data.forEach(function (d) {
        console.log(d);
        r+=`<div class="col-lg-3 col-md-6 max-width-50">
            <div class="box background-color-white-light">
                <div class="circle">
                <img class="img d-flex align-self-stretch align-items-center" style="width:120px;height:120px;" src="data:image/jpeg;base64,`+d.profile_pic+`"/>'
                </div>
                <h6>`+ d.fname +`</h6>
                <a href="profile/student/`+d.id+`" class="button job_post" data-hover="View"><span>View</span></a>
            </div>
        </div>`;
            
    
    });
    return r;

}








