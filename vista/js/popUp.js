$(document).ready(function () {
    $("#buttonInputPost").click(function () {
        $(".pop-up").css("visibility", "visible");
    });  
    $("#buttonCerrarModal").click(function () {
        $(".pop-up").css("visibility", "hidden");
    });
});