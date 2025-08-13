<?php
//Criterios
$servername = "localhost";
$username = "root";
$password = "";
$db = "servicios";

//Conexion
$conn =  new mysqli($servername, $username, $password, $db);

//Confirmar conexion
if( $conn ->connect_error){
    die("Conexion fallida a base de datos: " . $conn->connect_error);
}
?>



