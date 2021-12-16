window.onload = function() {
    if(localStorage.getItem("temaEscogidoLocal") == 'dia'){
        dia();
    }else{
        noche();
    }
 }

$(document).ready(function(){
    $('#buttonCerrarSesion').click(function(){
        localStorage.setItem("temaEscogidoLocal", "dia");
    });
});

function dia(){
    localStorage.setItem("temaEscogidoLocal", "dia");
    var root = document.documentElement;
    root.style.setProperty('--primary-color', '#ffffff');
    root.style.setProperty('--bg-color', '#eeeeee');
    root.style.setProperty('--text-color', '#000000');
    document.getElementById('dia').style.filter = "invert(0%)";
    document.getElementById('noche').style.filter = "invert(0%)";
    document.getElementById('buttonCerrarModalCambiarContraseña').style.filter = "invert(0%)";
    $("#example").removeClass("table-dark");
}

function noche(){
    localStorage.setItem("temaEscogidoLocal", "noche");
    var root = document.documentElement;
    root.style.setProperty('--primary-color', '#000000');
    root.style.setProperty('--bg-color', '#2f3336');
    root.style.setProperty('--text-color', '#ffffff');
    document.getElementById('dia').style.filter = "invert(100%)";
    document.getElementById('noche').style.filter = "invert(100%)";
    document.getElementById('buttonCerrarModalCambiarContraseña').style.filter = "invert(100%)";
    $("#example").addClass("table-dark");
}