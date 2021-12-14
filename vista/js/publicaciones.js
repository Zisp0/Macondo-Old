let ultimaPublicacion;
let publicaciones = "";
let inicio = 0;
let maximo = false;
let tituloPublicacion = "";
let contenidoPublicacion = "";
let categoriaPublicacion = "";
let tipoPublicacion = "Inicio";

$(document).ready(function () {
    $("#buttonPublicarPost").click(function () {
        validarPost();
    });

    $("#btnInicio").click(function () {
        tipoPublicacion = "Inicio";
        $(".containerInputPost").show();
        $(".containerProfile").hide();
        $('#publicaciones').empty();
        inicio = 0;
        maximo = false;
        cargarPublicaciones();
    });

    $("#btnHistorias").click(function () {
        tipoPublicacion = "Historias";
        $(".containerInputPost").show();
        $(".containerProfile").hide();
        $('#publicaciones').empty();
        inicio = 0;
        maximo = false;
        cargarPublicaciones();
    });
    
    $("#btnCuentos").click(function () {
        tipoPublicacion = "Cuentos";
        $(".containerInputPost").show();
        $(".containerProfile").hide();
        $('#publicaciones').empty();
        inicio = 0;
        maximo = false;
        cargarPublicaciones();
    });
    
    $("#btnLiteratura").click(function () {
        tipoPublicacion = "Literatura";
        $(".containerInputPost").show();
        $(".containerProfile").hide();
        $('#publicaciones').empty();
        inicio = 0;
        maximo = false;
        cargarPublicaciones();
    });
    
    $("#btnPoesia").click(function () {
        tipoPublicacion = "Poesia";
        $(".containerInputPost").show();
        $(".containerProfile").hide();
        $('#publicaciones').empty();
        inicio = 0;
        maximo = false;
        cargarPublicaciones();
    });
    
    $("#btnArticulos").click(function () {
        tipoPublicacion = "Artículos";
        $(".containerInputPost").show();
        $(".containerProfile").hide();
        $('#publicaciones').empty();
        inicio = 0;
        maximo = false;
        cargarPublicaciones();
    });

    $("#buttonPerfil").click(function(){
        tipoPublicacion = "Perfil";
        inicio = 0;
        maximo = false;
        $('#publicaciones').empty();
        cargarPublicaciones();
    });
});

let observador = new IntersectionObserver((entradas, observador) => {
    entradas.forEach(entradas => {
        if(entradas.isIntersecting){
            cargarPublicaciones();
        }
    });
}, {
    rootMargin: '0px 0px 200px 0px',
    threshold: 1.0
});



const cargarPublicaciones = async => {
    if(maximo){
        return;
    }else{
        $.ajax({
            url: "../controlador/accion/act_cargarPublicaciones.php",
            metodh: 'POST',
            dataType: 'text',
            data: {
                inicio: inicio,
                tipo: tipoPublicacion
            },
            success: function (respuesta) {
                if (respuesta == "maximo") {
                    maximo = true;
                } else {
                    if(ultimaPublicacion){
                        observador.unobserve(ultimaPublicacion);
                    }
                    inicio += 5;
                    $('#publicaciones').append(respuesta);
                    const publicacionesEnPantalla = document.querySelectorAll('#publicaciones .post');
                    ultimaPublicacion = publicacionesEnPantalla[publicacionesEnPantalla.length - 1];
                    observador.observe(ultimaPublicacion);
                }
            }
        });
    }
}

cargarPublicaciones();

function validarPost() {
    tituloPublicacion = document.getElementById("inputTituloPost").value;
    contenidoPublicacion = document.getElementById("inputContenidoPost").value;
    categoriaPublicacion = $('select[id=selectCategoriaPost]').val();
    
    if(tituloPublicacion === ""){
        Swal.fire({
            title:'Ingrese el título',
            text: 'Por favor ingrese un título',
            icon: 'warning'
        })
    }else if(contenidoPublicacion === ""){
        Swal.fire({
            title:'Ingrese el contenido',
            text: 'Por favor ingrese el contenido',
            icon: 'warning'
        })
    }else if(categoriaPublicacion === null){
        Swal.fire({
            title:'Selecciones la categoría',
            text: 'Por favor seleccione la categoría',
            icon: 'warning'
        })
    }else{
        publicarPost();
    }
}

function publicarPost() {
    let hoy = new Date();
    let fecha = hoy.getFullYear() + '-' + ( hoy.getMonth() + 1 ) + '-' + hoy.getDate();
    let hora = hoy.getHours() + ':' + hoy.getMinutes() + ':' + hoy.getSeconds();

    $.ajax({
        url: "../controlador/accion/act_publicarPost.php",
        metodh: 'POST',
        dataType: 'text',
        data: {
            titulo: tituloPublicacion,
            contenido: contenidoPublicacion,
            tipo: categoriaPublicacion,
            fecha: fecha,
            hora: hora
        },
        success: function (respuesta) {
            if(respuesta === "si"){
                Swal.fire({
                    title:'Publicado',
                    text: 'Publicado con éxito',
                    icon: 'success'
                })
                $('#publicaciones').empty();
                inicio = 0;
                maximo = false;
                cargarPublicaciones();
            }else{
                Swal.fire({
                    title:'Error en la publicacaión',
                    text: 'Hubo un error en la publicación',
                    icon: 'error'
                })
            }
        }
    });
}