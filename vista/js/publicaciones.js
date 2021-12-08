let ultimaPublicacion;
let publicaciones = "";
let inicio = 0;
let maximo = false;
let tituloPublicacion = "";
let contenidoPublicacion = "";
let categoriaPublicacion = "";

$(document).ready(function () {
    $("#buttonPublicarPost").click(function () {
        validarPost();
    })
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
                inicio: inicio
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
            text: 'Por favor ingrese un título',
            icon: 'warning'
        })
    }else if(contenidoPublicacion === ""){
        Swal.fire({
            text: 'Por favor ingrese el contenido',
            icon: 'warning'
        })
    }else if(categoriaPublicacion === null){
        Swal.fire({
            text: 'Por favor seleccione la categoría',
            icon: 'warning'
        })
    }else{
        publicarPost();
    }
}

function publicarPost() {
    let hoy = new Date();
    let fecha = hoy.getDate() + '/' + ( hoy.getMonth() + 1 ) + '/' + hoy.getFullYear();
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
            console.log(respuesta);
            if(respuesta === "si"){
                Swal.fire({
                    text: 'Publicado con éxito',
                    icon: 'success'
                })
            }else{
                Swal.fire({
                    text: 'Hubo un error en la publicación',
                    icon: 'error'
                })
            }
        }
    });
}