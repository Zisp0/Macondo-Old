window.onload = function() {
    if(localStorage.getItem("temaEscogidoLocal") == 'dia'){
        dia();
    }else{
        noche();
    }
 }

function dia(){
    localStorage.setItem("temaEscogidoLocal", "dia");
    var root = document.documentElement;
    root.style.setProperty('--primary-color', '#ffffff');
    root.style.setProperty('--bg-color', '#eeeeee');
    root.style.setProperty('--text-color', '#000000');
    document.getElementById('inicio').style.filter = "invert(0%)";
    document.getElementById('historias').style.filter = "invert(0%)";
    document.getElementById('cuentos').style.filter = "invert(0%)";
    document.getElementById('literatura').style.filter = "invert(0%)";
    document.getElementById('poesia').style.filter = "invert(0%)";
    document.getElementById('articulos').style.filter = "invert(0%)";
    document.getElementById('dia').style.filter = "invert(0%)";
    document.getElementById('noche').style.filter = "invert(0%)";
    document.getElementById('buttonUserOptions').style.filter = "invert(0%)";
    document.getElementById('buttonCerrarModal').style.filter = "invert(0%)";
    document.getElementById('buttonCerrarModalPerfil').style.filter = "invert(0%)";
    document.getElementById('buttonCerrarModalImagenPerfil').style.filter = "invert(0%)";
}

function noche(){
    localStorage.setItem("temaEscogidoLocal", "noche");
    var root = document.documentElement;
    root.style.setProperty('--primary-color', '#000000');
    root.style.setProperty('--bg-color', '#2f3336'); //#111111
    root.style.setProperty('--text-color', '#ffffff');
    document.getElementById('inicio').style.filter = "invert(100%)";
    document.getElementById('historias').style.filter = "invert(100%)";
    document.getElementById('cuentos').style.filter = "invert(100%)";
    document.getElementById('literatura').style.filter = "invert(100%)";
    document.getElementById('poesia').style.filter = "invert(100%)";
    document.getElementById('dia').style.filter = "invert(100%)";
    document.getElementById('articulos').style.filter = "invert(100%)";
    document.getElementById('noche').style.filter = "invert(100%)";
    document.getElementById('buttonUserOptions').style.filter = "invert(100%)";
    document.getElementById('buttonCerrarModal').style.filter = "invert(100%)";
    document.getElementById('buttonCerrarModalPerfil').style.filter = "invert(100%)";
    document.getElementById('buttonCerrarModalImagenPerfil').style.filter = "invert(100%)";
}