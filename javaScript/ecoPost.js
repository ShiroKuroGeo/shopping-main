$(document).ready(function(){
    let tmp = localStorage.getItem('isloggedin');
    if (tmp == 404) {
        window.location.href = "../dashboard.php";
    }
    getEcoPost();
    doGetEcoPostNewFeed();
});

$('#btnPost').click(function(){
    doInsertEcoPost();
});

$('#btnChangeProfile').click(function(){
    doChangeProfile();
});

$('#btnSaveLink').click(function(){
    doGetMessageLink();
});

var doInsertEcoPost =()=>{
    //Get only the file name
    var photo = $('#photo').val();
    var photoName = photo.replace(/^.*[\\\/]/, '');
    var videos = $('#videos').val();
    var videosName = videos.replace(/^.*[\\\/]/, '');
    $.ajax({
        type: "POST",
        url: "../source/router.php",
        data: {choice: 'doInsertEcoPost', Description:$('#description').val(), photo:photoName, video:videosName, status:1},
        success: function(data){
            if(data == 'success'){
                alert("Inserted");
            }else{
                alert("Dont");
            }
        },
        error: function(xhr, ajaxOptions, thrownError){
          alert(thrownError);
        }
    });
}

var getEcoPost =()=>{
    $.ajax({
        type: "POST",
        url: "../source/router.php",
        data: {choice: 'doGetDataEcoPost'},
        success: function(data){
          var json = JSON.parse(data);
          var str = "";
          json.forEach(element => {
              str += `
                <figure class="figure">
                    <hr class="col-12">
                    <figcaption class="figure-caption" id="descriptionPosted">${element.caption}</figcaption>
                    <div class="row">
                        <img src="../images/${element.image}" class="rounded col-6" alt="${element.image}">
                        <video src="../images/${element.video}" controls class="rounded col-6" >
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </figure>`;
          });
          $('#mgaPostTime').append(str);
        },
        error: function(xhr, ajaxOptions, thrownError){
          alert(thrownError);
        }
    });
}

var doGetEcoPostNewFeed =()=>{
    $.ajax({
        type: "POST",
        url: "../source/router.php",
        data: {choice: 'doGetEcoPostNewFeed'},
        success: function(data){
          var json = JSON.parse(data);
          var str = "";
          json.forEach(element => {
              str += `
                <figure class="figure">
                    <hr class="col-12">
                    <figcaption class="figure-caption" id="descriptionPosted">${element.caption}</figcaption>
                    <div class="row">
                        <img src="../images/${element.image}" class="rounded col-6" alt="${element.image}">
                        <img src="../images/${element.video}" class="rounded col-6" alt="${element.video}">
                    </div>
                </figure>`;
          });
          $('#mgaPost').append(str);
        },
        error: function(xhr, ajaxOptions, thrownError){
          alert(thrownError);
        }
    });
}

var doGetMessageLink =()=>{
    $.ajax({
        type: "POST",
        url: "../source/router.php",
        data: {choice: 'doGetMessageLink', linkMessage:$('#updateLinkMessage').val()},
        success: function(data){
            window.location.href = "timeline.html";
        },
        error: function(xhr, ajaxOptions, thrownError){
          alert(thrownError);
        }
    });
}

var doChangeProfile =()=>{
    //Get only the file name
    var photo = $('#photo').val();
    var photoName = photo.replace(/^.*[\\\/]/, '');
    $.ajax({
        type: "POST",
        url: "../source/router.php",
        data: {choice: 'doChangeProfile', photo:photoName},
        success: function(data){
            alert(data);
            if(data == 'success'){
                alert("Inserted");
            }else{
                alert("Dont");
            }
        },
        error: function(xhr, ajaxOptions, thrownError){
          alert(thrownError);
        }
    });
}