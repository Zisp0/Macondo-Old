$(document).ready(function () {
    $(".pop-up").hide();
    $("#buttonInputPost").click(function () {
        $(".pop-up").show();
    });  
    $("#buttonCerrarModal").click(function () {
        $(".pop-up").hide();
    });
});