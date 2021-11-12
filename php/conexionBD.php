<?php

/*
echo "Probando conexion entre el form y el post <br>";
echo "<br>";
$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$correo = $_POST['Correo'];
$contra = $_POST['Passwd'];

echo "Nombre: ".$nombre."<br>";
echo "Apellido: ".$apellido."<br>";
echo "Correo electrónico: ".$correo."<br>";
echo "Contraseña: ".$contra."<br>";
*/


/*Conexion al servidor local*/
$host = "localhost";
$user = "root";
$pass = "";
$db = "geneacoachbd";

$conexion = mysqli_connect($host,$user,$pass,$db);





?>