<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST">

        <h2>Hola</h2>
        <p>Inicia tu registro</p>

        <div class="input-wrapper">
            <input type="text" name="name" placeholder="Nombre">
            <img class="input-icon" src="images/name.svg" alt="nombre">
        </div>

        <div class="input-wrapper">
            <input type="email" name="email" placeholder="Email">
            <img class="input-icon" src="images/email.svg" alt="correo">
        </div>

        <div class="input-wrapper">
            <input type="text" name="direction" placeholder="Dirección">
            <img class="input-icon" src="images/direction.svg" alt="direccion">
        </div>

        <div class="input-wrapper">
            <input type="tel" name="phone" placeholder="Teléfono">
            <img class="input-icon" src="images/phone.svg" alt="teléfono">
        </div>

        <div class="input-wrapper">
            <input type="password" name="password" placeholder="Contraseña">
            <img class="input-icon" src="images/password.svg" alt="contraseña">
        </div>

        <input class="btn" type="submit" name="register" value="Enviar">


    </form>

    <?php 
    include("registrar.php");
    ?>

    
</body>
</html>