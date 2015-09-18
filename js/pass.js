$(document).ready(function(){

    $("#pass").blur (function () {
        $.ajax({
            type: "POST",
            url: "php/pass.php",
            data: "pass="+$("#pass").val(),
            success: function(msg){
                $('.results_pass').html( msg );

            }
        });
    });
});
