let ultimoComentario;
let comentarios = "";
inicio = 0;
maximo = false;
let idPublicacion;

function cerrar(){
    $('.pop-up-comentarios').css("display", "none");
}

function mostrarComentarios(id){
    $('.pop-up-comentarios').css("display", "flex");
    $("#comentarios").empty();
    inicio = 0;
    maximo = false;
    idPublicacion = id;
    cargarComentarios();
}

observador = new IntersectionObserver((entradas, observador) => {
    entradas.forEach(entradas => {
        if(entradas.isIntersecting){
            cargarComentarios();
        }
    });
}, {
    rootMargin: '0px 0px 200px 0px',
    threshold: 1.0
});

const cargarComentarios = async => {
    if(maximo){
        return;
    }else{
        $.ajax({
            url: "../controlador/accion/act_cargarComentarios.php",
            metodh: 'POST',
            dataType: 'text',
            data: {
                inicio: inicio,
                idPublicacion: idPublicacion
            },
            success: function (respuesta) {
                if (respuesta == "maximo") {
                    maximo = true;
                } else {
                    if(ultimoComentario){
                        observador.unobserve(ultimoComentario);
                    }
                    inicio += 5;
                    $('#comentarios').append(respuesta);
                    const comentariosEnPantalla = document.querySelectorAll('#comentarios .comentario');
                    ultimoComentario = comentariosEnPantalla[comentariosEnPantalla.length - 1];
                    observador.observe(ultimoComentario);
                }
            }
        });
    }
}