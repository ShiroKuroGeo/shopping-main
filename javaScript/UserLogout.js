$(document).ready(function(){
    let tmp = localStorage.getItem('isloggedin');
    if (tmp == 404) {
        window.location.href = "./";
    }
});

$('#btnLogout').click(function(){
    logout();
});

var logout =()=>{
    $.ajax({
        type: "POST",
        url: "./source/router.php",
        data: {choice:'logout'},
        success: function(data){
            if (data == "success") {
                localStorage.setItem('isloggedin','404');
                window.location.href = "./";
            }else{
                alert(data);
                confirm("Something is wrong!");
            }
        }, 
        error: function (xhr, ajaxOptions, thrownError) {
            alert(thrownError);
        }
    });
}