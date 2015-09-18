$(document).ready(function(){

    $("#login").blur (function () {
        $.ajax({
            type: "POST",
            url: "php/login.php",
            data: "login="+$("#login").val(),
            success: function(msg){
                $('.results_login').html( msg );

            }
        });
    });
});