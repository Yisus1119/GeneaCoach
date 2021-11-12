<?php 
// Llamamos a la base de datos 
include("conexionBD.php");
// Pedido de datos del formulario login
$correo = $_POST['email'];
$contra = $_POST['pass'];
session_start();
// Globalizacion de la variable
$_SESSION['email']=$correo;

// consulta
$consulta = "SELECT * FROM vwdatosdecrypt WHERE Correo_Electronico = '$correo' and  RECUPERADO = '$contra' ";

//validacion de datos 
$validacion = mysqli_query($conexion,$consulta);

//Guardado de array
$tuplas = mysqli_fetch_array($validacion);

//Validacion de usuarios segun su rol en la pagina
//Usuario admin
if ($tuplas['id_rol']==1) {
header('location:http://localhost/GeneaCoach/Register.php');
}
//Usuario profesor
elseif ($tuplas['id_rol']==2) {
    header('location:http://localhost/GeneaCoach/Home.php');
}
//usuario estudiante
elseif ($tuplas['id_rol']==3) {
    header('location:http://localhost/GeneaCoach/Register.php');
}
//Fallo del login (Datos incorrectos)
else {
    echo "Los datos ingresados son incorrectos" ;
}
mysqli_free_result($validacion);
mysqli_close($conexion)
?>