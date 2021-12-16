$(document).ready(function () {
    $("#buttonEnviarPreferncias").click(function () {
        $("input[type=checkbox]:checked").each(function(){
            guardarPreferencias($(this).val());
        });
    });
});

function guardarPreferencias(valor) {
    $.ajax({
        url: "../controlador/accion/act_guardarPreferencias.php",
        metodh: 'POST',
        dataType: 'text',
        data: {
            valor: valor
        },
        success: function (respuesta) {
            if(respuesta === "si"){
                document.location.href='/Macondo/vista/home.php';
            }
        }
    });
}