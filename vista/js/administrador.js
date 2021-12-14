$(document).ready(function () {
    llenarUsuarios();

    $("#buttonUsuarios").click(function () {
        llenarUsuarios();
    });  

    $("#buttonPublicaciones").click(function () {
        llenarPublicaciones();
    });

    $("#buttonComentarios").click(function () {
        llenarComentarios();
    })
});

function llenarUsuarios() {
    $.ajax({
        url: "../controlador/accion/act_llenarUsuarios.php",
        success: function (respuesta) {
            insertarUsuarios(JSON.parse(respuesta));
        }
    });
}

function llenarPublicaciones() {
    $.ajax({
        url: "../controlador/accion/act_llenarPublicaciones.php",
        success: function (respuesta) {
            insertarPublicaciones(JSON.parse(respuesta));
        }
    });
}

function llenarComentarios() {
    $("#example thead tr th").remove();
    $("#example tbody tr").remove();
    $.ajax({
        url: "../controlador/accion/act_llenarComentarios.php",
        success: function (respuesta) {
            $("#example tbody").append(respuesta);
        }
    });
}

function insertarUsuarios(respuesta) {
    let Inser = '';

    $("#example thead tr th").remove();
    $("#example tbody tr").remove();

    $("#example thead tr").append(
        "<th id='col1'>Id</th>" +
        "<th id='col2'>Nombres</th>" +
        "<th id='col3'>Apellidos</th>" +
        "<th id='col4'>Seudonimo</th>" +
        "<th id='col5'>Email</th>" +
        "<th id='col6'>Rol</th>" + 
        "<th id='col7'>Estado</th>" +
        "<th id='col8'>Opciones</th>"
    );

    $.each(respuesta, function(i) {
        Inser += '<tr>'+
            '<td>'+ respuesta[i].idUsuario +'</td>'+
            '<td>'+ respuesta[i].primerNombre + ' ' + respuesta[i].segundoNombre + '</td>'+
            '<td>'+ respuesta[i].primerApellido + ' ' + respuesta[i].segundoApellido + '</td>'+
            '<td>'+ respuesta[i].seudonimo + '</td>'+
            '<td>'+ respuesta[i].correo + '</td>'+
            '<td>'+ respuesta[i].rol + '</td>'+
            '<td>'+ respuesta[i].estado + '</td>'+
            '<td><button class="buttonTable"><span class="material-icons">delete</span></button><button class="buttonTable"><span class="material-icons">edit</span></button></td>'+
        '</tr>';
    })

    $("#example tbody").append(Inser);
}

function insertarPublicaciones(respuesta) {
    let Inser = '';

    $("#example thead tr th").remove();
    $("#example tbody tr").remove();

    $("#example thead tr").append(
        "<th id='col1'>Id</th>" +
        "<th id='col2'>Título</th>" +
        "<th id='col3'>Contenido</th>" +
        "<th id='col4'>id autor</th>" +
        "<th id='col5'>Estado</th>" +
        "<th id='col6'>Opciones</th>"
    );

    $.each(respuesta, function(i) {
        Inser += '<tr>' +
            '<td>'+ respuesta[i].idPublicacion +'</td>'+
            '<td>'+ respuesta[i].titulo + '</td>'+
            '<td>'+ respuesta[i].contenido + '</td>'+
            '<td>'+ respuesta[i].idUsuario + '</td>'+
            '<td>'+ respuesta[i].estado + '</td>'+
            '<td><button class="buttonTable"><span class="material-icons">delete</span></button><button class="buttonTable"><span class="material-icons">edit</span></button></td>'+
        '</tr>';
    })

    $("#example tbody").append(Inser);
}

function insertarComentarios(respuesta) {
    let Inser = '';

    $("#example thead tr th").remove();
    $("#example tbody tr").remove();

    $("#example thead tr").append(
        "<th id='col1'>Id</th>" +
        "<th id='col2'>id autor</th>" +
        "<th id='col3'>Contenido</th>" +
        "<th id='col4'>Estado</th>" +
        "<th id='col5'>Opciones</th>"
    );

    $.each(respuesta, function(i) {
        Inser += '<tr>' +
            '<td>'+ respuesta[i].idComentario +'</td>'+
            '<td>'+ respuesta[i].idUsuario + '</td>'+
            '<td>'+ respuesta[i].contenido + '</td>'+
            '<td>'+ respuesta[i].estado + '</td>'+
            '<td>'+ respuesta[i].correo + '</td>'+
            '<td>'+ respuesta[i].estado + '</td>'+
            '<td><button class="buttonTable"><span class="material-icons">delete</span></button><button class="buttonTable"><span class="material-icons">edit</span></button></td>'+
        '</tr>';
    })

    $("#example tbody").append(Inser);
}