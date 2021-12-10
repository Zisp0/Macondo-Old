$(document).ready(function(){
    $(".containerProfile").hide();
    $("#buttonPerfil").click(function(){
        $(".containerContent").hide();
        $(".containerProfile").show();
    });

    cargarNombre();
});

function cargarNombre() {
    $.ajax({
        url: "../controlador/accion/act_cargarNombreUsuario.php",
        dataType: 'text',
        success: function (respuesta) {
            document.getElementById("nombreUsuario").innerHTML = respuesta;
        }
    });
}