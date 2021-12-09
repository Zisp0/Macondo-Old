$(document).ready(function(){
    $(".containerProfile").hide();
    $("#buttonPerfil").click(function(){
        $(".containerContent").hide();
        $(".containerProfile").show();
    });
});