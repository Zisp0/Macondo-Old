
$('#buttonCambiarContraseña').click(function (){
    $('.pop-up-cambiar-contraseña').css("visibility", "visible");
});
$('#buttonCerrarModalCambiarContraseña').click(function (){
    $('.pop-up-cambiar-contraseña').css("visibility", "hidden");
});

const expresiones = /(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;

$('#buttonSubirCambiosContraseña').click(function(){
    if($("#inputContraActual").val() == ""){
        Swal.fire({
            title: "Campo de contraseña actual vacío.",
            text: 'Por favor ingrese su contraseña actual.',
            icon: 'warning'
        })
    }else if($("#inputContraNueva").val() == ""){
        Swal.fire({
            title: "Campo de contraseña nueva vacío.",
            text: 'Por favor ingrese su nueva contraseña.',
            icon: 'warning'
        })
    }else if($("#inputContraConfirmar").val() == ""){
        Swal.fire({
            title: "Campo de confirmar contraseña vacío.",
            text: 'Por favor confirme su nueva contraseña.',
            icon: 'warning'
        })
    }else if($("#inputContraConfirmar").val() != $("#inputContraNueva").val()){
        Swal.fire({
            title: "Las contraseñas no coinciden.",
            text: 'La nueva contraseña ingresada no coincide con su confirmación, digitela nuevamente.',
            icon: 'warning'
        })
    }else if(!expresiones.test($("#inputContraConfirmar").val())){
        Swal.fire({
            title: "Contraseña insegura.",
            text: 'La nueva contraseña debe tener mas de 8 digitos sin espacios y minimo un numero y letra.',
            icon: 'warning'
        })
    }else{
        cambiarContra();
    } 
});

function cambiarContra(){
    $.ajax({
        url:3
    })
}