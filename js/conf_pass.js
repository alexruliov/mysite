$(document).ready(function(){

    $("#pass1").blur (function () {
        $.ajax({
            type: "POST",
            url: "php/conf_pass.php",
            data: "pass1="+$("#pass1").val() + "pass="+$("#pass").val(),
            success: function(msg){
                $('.results_conf_pass').html( msg );

            }
        });
    });
});
