$('#buttonUsuarios').click(function () {
    $('#title').text("Usuarios");
    $('#col1').text('Id');
    $('#col2').text('Nombre');
    $('#col3').text('Apellidos');
    $('#col4').text('Seudonimo');
    $('#col5').text('Email');
    $('#col6').text('Rol');
});
$('#buttonPublicaciones').click(function () {
    $('#title').text("Publicaciones");
    $('#col1').text('Id');
    $('#col2').text('Usuario');
    $('#col3').text('Tipo');
    $('#col4').text('Titulo');
    $('#col5').text('Contenido');
    $('#col6').text('Fecha');
});
$('#buttonComentarios').click(function () {
    $('#title').text("Comentarios");
    $('#col1').text('Id');
    $('#col2').text('Usuario');
    $('#col3').text('Publicacion');
    $('#col4').text('Contenido');
    $('#col5').text('fecha');
    $('#col6').text('hora');
});

//$('#example').DataTable(); //Para inicializar datatables de la manera más simple

$(document).ready(function() {    
    $('#example').DataTable({
    //para cambiar el lenguaje a español
        "language": {
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sSearch": "Buscar:",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast":"Último",
                    "sNext":"Siguiente",
                    "sPrevious": "Anterior"
			     },
			     "sProcessing":"Procesando...",
            }
    });     
});