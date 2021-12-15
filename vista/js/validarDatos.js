const expresiones = {
    correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9]+.[a-zA-Z0-9]+$/,
    contrasena: /(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/,
    nombres: /^[a-zA-Z]{1,20}$/,
    seudo: /^[a-zA-Z0-9_.+-]{1,20}$/ 
}

$(document).ready(function () {
    $("#buttonLogIn").click(function () {
        validarDatosLogin();
    });

    $("#buttonSignUp").click(function () {
        validarDatosRegistro();
    });
})

function validarDatosLogin() {
    let email = $("#inputEmail").val().trim();
    let pass = $("#inputPassword").val().trim();
    
    if(email == ""){
        Swal.fire({
            text: 'Por favor ingrese su email',
            icon: 'warning'
        })
    }else if(!expresiones.correo.test(email)){
        Swal.fire({
            text: 'Por favor un email válido, ejemplo: example@exam.ex',
            icon: 'warning'
        })
    }else if(pass == ""){
        Swal.fire({
            text: 'Por favor ingrese su contraseña',
            icon: 'warning'
        })
    }else {
        intentarLogIn(email, pass);
    }
}

function intentarLogIn(email, pass) {
    $.ajax({
        url: "../controlador/accion/act_login.php",
        dataType: 'text',
        method: 'post',
        data: {
            user: email,
            pass: pass
        },
        success: function (respuesta) {
            if(respuesta == "no"){
                Swal.fire({
                    text: 'Los datos ingresados son incorrectos',
                    icon: 'error'
                })
            }else if(respuesta == "user"){
                document.location.href='/Macondo/vista/home.php';
            }else if(respuesta == "admin"){
                document.location.href='/Macondo/vista/administrador.php';
            }
        }
    });
}

function validarDatosRegistro() {
    let primerNombre = $("#inputPrimerNombre").val().trim();
    let segundoNombre = $("#inputSegundoNombre").val().trim();
    let primerApellido = $("#inputPrimerApellido").val().trim();
    let segundoApellido = $("#inputSegundoApellido").val().trim();
    let email = $("#inputCorreoElectronico").val().trim();
    let seudonimo = $("#inputSeudonimo").val().trim();
    let pass = $("#inputContraseña").val().trim();
    let passConfirm = $("#inputConfirmarContraseña").val().trim();

    if(primerNombre == ""){
        Swal.fire({
            text: 'Por favor ingrese su primer nombre',
            icon: 'warning'
        })
    }else if(!expresiones.nombres.test(primerNombre)){
        Swal.fire({
            text: 'Su primer nombre solo puede contener letras y un máximo de 20',
            icon: 'warning'
        })
    }else if(!expresiones.nombres.test(segundoNombre) && segundoNombre != ""){
        Swal.fire({
            text: 'Su segundo nombre solo puede contener letras y un máximo de 20',
            icon: 'warning'
        })
    }else if(primerApellido == ""){
        Swal.fire({
            text: 'Por favor ingrese su primer apellido',
            icon: 'warning'
        })
    }else if(!expresiones.nombres.test(primerApellido)){
        Swal.fire({
            text: 'Su primer apellido solo puede contener letras y un máximo de 20',
            icon: 'warning'
        })
    }else if(!expresiones.nombres.test(segundoApellido) && segundoApellido != ""){
        Swal.fire({
            text: 'Su segundo apellido solo puede contener letras y un máximo de 20',
            icon: 'warning'
        })
    }else if(email == ""){
        Swal.fire({
            text: 'Por favor ingrese su email',
            icon: 'warning'
        })
    }else if(!expresiones.correo.test(email)){
        Swal.fire({
            text: 'Por favor un email válido, ejemplo: example@exam.ex',
            icon: 'warning'
        })
    }else if(seudonimo == ""){
        Swal.fire({
            text: 'Por favor ingrese su seudonimo',
            icon: 'warning'
        })
    }else if(!expresiones.seudo.test(seudonimo)){
        Swal.fire({
            text: 'Su seudonimo tiene un máximo de 20 caracteres',
            icon: 'warning'
        })
    }else if(pass == ""){
        Swal.fire({
            text: 'Por favor ingrese su contraseña',
            icon: 'warning'
        })
    }else if(passConfirm == ""){
        Swal.fire({
            text: 'Por favor confirme su contraseña',
            icon: 'warning'
        })
    }else if(pass != passConfirm){
        Swal.fire({
            text: 'La contraseña ingresada no coincide con su confirmación, digitela nuevamente',
            icon: 'warning'
        })
    }else if(!expresiones.contrasena.test(pass)){
        Swal.fire({
            title: "Contraseña insegura.",
            text: 'La contraseña debe tener mas de 8 digitos sin espacios y minimo un numero y letra',
            icon: 'warning'
        })
    }else {
        intentarSingUp(primerNombre, segundoNombre, primerApellido, segundoApellido, email, seudonimo, pass);
    }
}

function intentarSingUp(primerNombre, segundoNombre, primerApellido, segundoApellido, email, seudonimo, pass) {
    $.ajax({
        url: "../controlador/accion/act_registrarUsuario.php",
        dataType: 'text',
        method: 'post',
        data: {
            primerNombre: primerNombre,
            segundoNombre: segundoNombre,
            primerApellido: primerApellido,
            segundoApellido: segundoApellido,
            correo: email,
            seudonimo: seudonimo,
            pass: pass
        },
        success: function (respuesta) {
            console.log(respuesta);
            if(respuesta == "correo"){
                Swal.fire({
                    text: 'Ya existe un usuario registrado con el correo ingresado',
                    icon: 'error'
                })
            }else if(respuesta == "seudo"){
                Swal.fire({
                    text: 'Ya existe un usuario registrado con el seudonimo ingresado',
                    icon: 'error'
                })
            }else if(respuesta == "no"){
                Swal.fire({
                    text: 'Hubo un error al registrarse, por favor inténtelo de nuevo',
                    icon: 'error'
                })
            }else{
                document.location.href='/Macondo/vista/home.php';
            }
        }
    });
}