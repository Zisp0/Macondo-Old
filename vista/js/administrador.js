$(document).ready(function () {
    llenarUsuarios();

    $("#buttonUsuarios").click(function () {
        $("#buttonPublicaciones").css("background-color","var(--primary-color)");
        $("#buttonComentarios").css("background-color","var(--primary-color)");
        $("#buttonUsuarios").css("background-color","#ffe000a6");
        $(".buttonEditar").removeAttr("id");
        $(".buttonEditar").attr("id","buttonUsuarios");
        $(".buttonEliminar").removeAttr("id");
        $(".buttonEliminar").attr("id","buttonUsuarios");
        llenarUsuarios();
    });  

    $("#buttonPublicaciones").click(function () {
        $("#buttonUsuarios").css("background-color","var(--primary-color)");
        $("#buttonComentarios").css("background-color","var(--primary-color)");
        $("#buttonPublicaciones").css("background-color","#ffe000a6");
        $(".buttonEditar").removeAttr("id");
        $(".buttonEditar").attr("id","buttonPublicaciones");
        $(".buttonEliminar").removeAttr("id");
        $(".buttonEliminar").attr("id","buttonPublicaciones");
        llenarPublicaciones();
    });

    $("#buttonComentarios").click(function () {
        $("#buttonPublicaciones").css("background-color","var(--primary-color)");
        $("#buttonUsuarios").css("background-color","var(--primary-color)");
        $("#buttonComentarios").css("background-color","#ffe000a6");
        $(".buttonEditar").removeAttr("id");
        $(".buttonEditar").attr("id","buttonComentarios");
        $(".buttonEliminar").removeAttr("id");
        $(".buttonEliminar").attr("id","buttonComentarios");
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
            insertarComentarios(JSON.parse(respuesta));
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

    let seudonimo = "";
    $.each(respuesta, function(i) {
        seudonimo = "'"+respuesta[i].seudonimo+"'";
        Inser += '<tr>'+
            '<td>'+ respuesta[i].idUsuario +'</td>'+
            '<td>'+ respuesta[i].primerNombre + ' ' + respuesta[i].segundoNombre + '</td>'+
            '<td>'+ respuesta[i].primerApellido + ' ' + respuesta[i].segundoApellido + '</td>'+
            '<td>'+ respuesta[i].seudonimo + '</td>'+
            '<td>'+ respuesta[i].correo + '</td>'+
            '<td>'+ respuesta[i].rol + '</td>'+
            '<td>'+ respuesta[i].estado + '</td>'+
            '<td><button class="buttonTable">'+
                '<span class="material-icons">delete</span></button>'+
            '<button class="buttonTable" onclick="editarUsuario('+respuesta[i].idUsuario+', '+respuesta[i].estado+', '+seudonimo+')">'+
                '<span class="material-icons">edit</span></button></td>'+
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

    let titulo = "";
    $.each(respuesta, function(i) {
        titulo = "'"+respuesta[i].titulo+"'";
        Inser += '<tr>' +
            '<td>'+ respuesta[i].idPublicacion +'</td>'+
            '<td>'+ respuesta[i].titulo + '</td>'+
            '<td>'+ respuesta[i].contenido + '</td>'+
            '<td>'+ respuesta[i].idUsuario + '</td>'+
            '<td>'+ respuesta[i].estado + '</td>'+
            '<td><button class="buttonTable">'+
                '<span class="material-icons">delete</span></button>'+
            '<button class="buttonTable" onclick="editarPublicacion('+respuesta[i].idPublicacion+', '+respuesta[i].estado+', '+titulo+')">'+
                '<span class="material-icons">edit</span></button></td>'+
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
            '<td><button class="buttonTable">'+
                '<span class="material-icons">delete</span></button>'+
            '<button class="buttonTable" onclick="editarComentario('+respuesta[i].idComentario+', '+respuesta[i].estado+')">'+
                '<span class="material-icons">edit</span></button></td>'+
        '</tr>';
    })

    $("#example tbody").append(Inser);
}

function editarUsuario(id, estado, seudonimo) {
    let mensaje = "Estás a punto de ";
    if(estado == 1){
        mensaje += "banear";
        estado = 2;
    }else{
        mensaje += "habilitar";
        estado = 1;
    }
    mensaje += " al usuario " + seudonimo +"!";
    
    Swal.fire({
        title: '¿Estás seguro?',
        text: mensaje,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, estoy seguro!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "../controlador/accion/act_editarEstadoUsuario.php",
                method: 'POST',
                dataType: 'text',
                data: {
                    id: id,
                    estado: estado
                },
                success: function (resultado) {
                    if(resultado == "si"){
                        Swal.fire(
                            'Completo!',
                            'El estado del usuario ha sido modificado.',
                            'success'
                        )
                        llenarUsuarios();
                    }else{
                        Swal.fire(
                            'Error!',
                            'Ha ocurrido un error.',
                            'error'
                        )
                    }
                }
            })
            
        }
    })
}

function editarPublicacion(id, estado, titulo) {
    let mensaje = 'Estás a punto de ';
    if(estado == 1){
        mensaje += 'banear';
        estado = 2;
    }else{
        mensaje += 'habilitar';
        estado = 1;
    }
    mensaje += ' la publicación "' + titulo +'"!';
    
    Swal.fire({
        title: '¿Estás seguro?',
        text: mensaje,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, estoy seguro!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "../controlador/accion/act_editarEstadoPublicacion.php",
                method: 'POST',
                dataType: 'text',
                data: {
                    id: id,
                    estado: estado
                },
                success: function (resultado) {
                    if(resultado == "si"){
                        Swal.fire(
                            'Completo!',
                            'El estado de la publicación ha sido modificado.',
                            'success'
                        )
                        llenarPublicaciones();
                    }else{
                        Swal.fire(
                            'Error!',
                            'Ha ocurrido un error.',
                            'error'
                        )
                    }
                }
            })
            
        }
    })
}

function editarComentario(id, estado) {
    let mensaje = 'Estás a punto de ';
    if(estado == 1){
        mensaje += 'banear';
        estado = 2;
    }else{
        mensaje += 'habilitar';
        estado = 1;
    }
    mensaje += ' el comentario con ID = "' + id +'"!';
    
    Swal.fire({
        title: '¿Estás seguro?',
        text: mensaje,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, estoy seguro!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "../controlador/accion/act_editarEstadoComentario.php",
                method: 'POST',
                dataType: 'text',
                data: {
                    id: id,
                    estado: estado
                },
                success: function (resultado) {
                    if(resultado == "si"){
                        Swal.fire(
                            'Completo!',
                            'El estado del comentario ha sido modificado.',
                            'success'
                        )
                        llenarComentarios();
                    }else{
                        Swal.fire(
                            'Error!',
                            'Ha ocurrido un error.',
                            'error'
                        )
                    }
                }
            })
            
        }
    })
}