function dia(){
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
}

function noche(){
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
}