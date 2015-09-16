$(document).ready(function(){

    $("#email").blur (function () {
        $.ajax({
            type: "POST",
            url: "php/email.php",
            data: "email="+$("#email").val(),
            success: function(msg){
                $('.results_email').html( msg );

            }
        });
    });
});