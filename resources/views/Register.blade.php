@extends('header')

<!DOCTYPE html>
<html lang="en">
 

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reg&iacute;strate</title>
    <link rel="stylesheet" href="../css/Register.css">
</head>

<body>


    <div class="container">
        <form action="php/InsertEstudiante.php" class="form-box" method="post">

            <img src="assets/Icon.png" alt="Logo" />

            <div class="div-buttons">
                <a href="Register" class="Register-btn">Register</a>
                <a href="Login" class="Login-btn">Login</a>
            </div>
            <br>

            <div class="Div-input-name">
                <label for="name" class="lb-name">Nombre</label>
                <input type="text" placeholder="Nombre " class="Input-name" name="name">
            </div>
            <br>

            <div class="Div-input-name">
                <label for="lastName" class="lb-name">Apellido</label>
                <input type="text" placeholder="lastName" class="Input-name" name="lastName">
            </div>
            <br>

            <div class="Div-input-email">
                <label for="email" class="lb-email">Correo electonico</label>
                <input type="email" placeholder="Correo electonico" class="Input-email" name="email">
            </div>
            <br>

            <div class="Div-input-pass">
                <label for="pass" class="lb-pass">Contraseña</label>
                <input type="password" placeholder="Contraseña" class="Input-pass" name="pass">
            </div>
            <br>
            <input type="submit" value="Registrarme" class="btn-register" name="submit">

            <span>¿Ya tienes una cuenta? <a href="">Inicia Sesi&oacute;n</a></span>
        </form>
    </div>


</body>

</html>