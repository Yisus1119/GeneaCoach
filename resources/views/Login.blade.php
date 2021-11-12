@extends('componentsPhp.header')
@extends('componentsPhp.footer')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/Login.css">
</head>

<body>

    <div class="container">
        <form action="php/ValidacionLogin.php" class="form-box" method="post">

            <img src="assets/Icon.png" alt="Logo" /> 

            <div class="div-buttons">
                <a href="Register" class="Login1-btn">Register</a>
                <a href="Login" class="Register1-btn">Login</a>
            </div>
        
            <br><br><br>

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
            <input type="submit" value="Inicia Sesi&oacute;n" class="btn-register" name="submit">

            <span>¿A&uacute;n no tienes cuenta? <a href="">Reg&iacute;strate, es gratis.</a></span>
        </form>

    </div>
    

</body>

</html>