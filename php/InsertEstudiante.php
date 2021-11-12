<?php

// if(isset($_POST['submit'])) {

include("conexionBD.php");

$nombre = $_POST['name'];
$apellido = $_POST['lastName'];
$correo = $_POST['email'];
$contra = $_POST['pass'];
$rol = 3;

//Veamos una consulta para llamar el campo que no quiero que se repita, en este caso el correo electrónico.
$check= mysqli_query($conexion,"SELECT * FROM registrarusuario where Correo_Electronico='$correo'");
$checkrows = mysqli_num_rows($check);

//Decimos que si el campo tiene más de 1 registro con el mismo correo, nos cancele la consulta.
if ($checkrows>0) {

echo "El correo electrónico ya ha sido registrado por otra cuenta. ";
echo '<center> <a href="/Geneacoach/Register.html"> Volver al formulario</a> </center>';

} else { 

//Si el correo no está duplicado, procedemos a hacer el insert a la tabla.
$solicitud = "INSERT INTO registrarusuario (Nombre,Apellido,Correo_Electronico,Contraseña,id_rol) values ('$nombre', '$apellido','$correo',aes_encrypt('$contra','AES'),$rol)";


$resultado = mysqli_query($conexion,$solicitud);
mysqli_close($conexion);

echo "<center>¡Registro completado exitósamente!.</center>";
echo '<center> <a href="/Geneacoach/Register.html"> Volver al sitio web al que va a redirigirse </a> </center>';

}

// };

?>
