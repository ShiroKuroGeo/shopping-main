$(document).ready(function(){
    let tmp = localStorage.getItem('isloggedin');
    if (tmp == "200") {
        window.location.href = "dashboard.php";
    }
});

$('#btnLogin').click(function(){
    check();
});

var check =()=>{
    if($('#email').val() != "" && $('#eassword').val() != ""){
        doRequest();
    }else{
        alert("Fill up empty Fields!");
    }
}

var doRequest =()=>{
    $.ajax({
        type: "POST",
        url: "./source/router.php",
        data: {choice:'login',Email:$('#email').val(),Password:$('#password').val()},
            success: function(data){
                if (data == "200"){
                    localStorage.setItem('isloggedin','200');
                    window.location.href = "./eco-post/home.php";
                }else{
                    confirm("Something is wrong!");
                }
            },
            error: function (xhr,ajaxOptions,thrownError){
                alert(thrownError)
            }
        });
}
method
action