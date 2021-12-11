$(document).ready(function(){
    $(".containerProfile").hide();
    $("#buttonPerfil").click(function(){
        $(".containerContent").hide();
        $(".containerProfile").show();
    });

    //cerrar y abrir modal
    $("#buttonEditarPerfil").click(function (){
        $(".pop-up-perfil").css("visibility", "visible");
    });
    $("#buttonCerrarModalPerfil").click(function () {
        $(".pop-up-perfil").css("visibility", "hidden");
    });
    cargarPrimerNombre();
    cargarNombreCompleto();
});

function cargarPrimerNombre() {
    $.ajax({
        url: "../controlador/accion/act_cargarNombreUsuario.php",
        dataType: 'text',
        success: function (respuesta) {
            let primerNombre = respuesta.slice(0, respuesta.indexOf(" "));
            document.getElementById("nombreUsuario").innerHTML = primerNombre;
        }
    });
}

function cargarNombreCompleto(){
    $.ajax({
        url: "../controlador/accion/act_cargarNombreUsuario.php",
        dataType: 'text',
        success: function (respuesta) {
            document.getElementById("nameUserProfile").innerHTML = respuesta;
        }
    });
}