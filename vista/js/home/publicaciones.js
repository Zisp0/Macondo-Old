let ultimaPublicacion;
let publicaciones = "";
let inicio = 0;
let maximo = false;

let observador = new IntersectionObserver((entradas, observador) => {
    console.log(entradas);
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
                getData: 1,
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