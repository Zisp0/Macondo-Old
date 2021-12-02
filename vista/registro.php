<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="shortcut icon" href="pictures/butterflyIcon.png">
    <link rel="stylesheet" href="styles/registro.css">
</head>
<body>
    <div>
        <form action="">    
            <input type="text" placeholder="Primer Nombre">
            <input type="text" placeholder="Segundo Nombre">
            <input type="text" placeholder="Primer Apellido">
            <input type="text" placeholder="Segundo Apellido">
            <input type="email" placeholder="Correo Electrónico">
            <input type="password" placeholder="Contraseña">
            <input type="password" placeholder="Confirmar Contraseña">
            <button type="submit">Registrarse</button>
        </form>
    </div>
</body>
</html>