$(document).ready(function(){
    $("#buttonPerfil").click(function(){
        $(".containerProfile").show();
        $(".containerInputPost").hide();
    });

    //cerrar y abrir modal de editar datos
    $("#buttonEditarPerfil").click(function (){
        $(".pop-up-perfil").css("visibility", "visible");
    });
    
    $("#buttonCerrarModalPerfil").click(function () {
        $(".pop-up-perfil").css("visibility", "hidden");
    });

    //cerrar y abrir modal de editar foto
    $("#buttonAddFoto").click(function (){
        $(".pop-up-imagen-perfil").css("visibility", "visible");
    });

    $("#buttonCerrarModalImagenPerfil").click(function () {
        $(".pop-up-imagen-perfil").css("visibility", "hidden");
    });

    cargarPrimerNombre();
    cargarNombreCompleto();
    cargarFotosUsuario();

    $("#buttonSubirCambiosImagen").click(function(){
        subirImagen();
    });
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
            let primerNombre = respuesta.slice(0, respuesta.indexOf(" "));
            let primerApellido = respuesta.slice(respuesta.indexOf(" "), respuesta.lastIndexOf(" "));
            document.getElementById("nameUserProfile").innerHTML = primerNombre + ' ' + primerApellido;
            let seudonimo = respuesta.slice(respuesta.lastIndexOf(" ") + 1, respuesta.length);
            document.getElementById("pseudonimoUserProfile").innerHTML = '@' + seudonimo;
        }
    });
}

function cargarFotosUsuario() {
    $.ajax({
        url: "../controlador/accion/act_cargarFotosUsuario.php",
        dataType: 'text',
        success: function (respuesta) {
            if(respuesta != "no"){
                document.getElementById("miFoto").src = respuesta;
                document.getElementById("fotoUserNav").src = respuesta;
                document.getElementById("fotoUserPubli").src = respuesta;
            }
        }
    });
}

//llamar validar imagen cada vez que se cambie la foto
$("#inputFoto").change(function () {
    validarImagen();
});

//validar la imagen
function validarImagen(){
    let fileInput = document.getElementById('inputFoto');
    let filePath = fileInput.value;
    let allowedExtensions = /(.jpg|.jpeg|.png)$/i;
    if(!allowedExtensions.exec(filePath)){
        Swal.fire({
            text: 'Seleccione una imagen con extensión .jpg, jpeg y png.',
            icon: 'error'
        })
        fileInput = '';
    }else if(fileInput.files[0].size > 2097152){
        Swal.fire({
            text: 'Seleccionar una imagen menor a 2 MB.',
            icon: 'warning'
        })
    }else{
        readImage(fileInput);
    }
}

//preview de la foto en la modal
function readImage (input) {
    if(input.files && input.files[0]){
      let reader = new FileReader();
      reader.onload = function (e) {
          $('#fotoPerfilEnModal').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    }
}

function subirImagen(){
    let formData = new FormData($("#formImg")[0]);
	$.ajax({
	    type: 'POST',
	    url: '../controlador/accion/act_subirImagenPerfil.php',
        data: formData,
        contentType:false,
	    processData: false,
        success: function (respuesta){
            console.log(respuesta);
            if(respuesta == "si"){
                Swal.fire({
                    text: 'Imagen subida correctamente',
                    icon: 'success'
                })
                cargarFotosUsuario();
                $(".pop-up-imagen-perfil").css("visibility", "hidden");
            }else if(respuesta == "no"){
                Swal.fire({
                    text: 'Por favor, inserte una imagen.',
                    icon: 'warning'
                })
            }
        }
	});
}