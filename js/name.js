$(document).ready(function(){

    $("#name").blur (function () {
        $.ajax({
            type: "POST",
            url: "php/val.php",
            data: "name="+$("#name").val(),
            success: function(msg){
                $('.results').html( msg );

            }
        });
    });
});
