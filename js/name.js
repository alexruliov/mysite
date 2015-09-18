$(document).ready(function(){

    $("#name").blur (function () {
        $.ajax({
            type: "POST",
            url: "php/name.php",
            data: "name="+$("#name").val(),
            success: function(msg){
                $('.results').html( msg );

            }
        });
    });
});
