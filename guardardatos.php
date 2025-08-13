<?php
//conecta el archivo de conexión
include 'conexion.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
//tomamos datos del formulario
    $nombre = $_POST['nombrecliente'];
    $telefono = $_POST['telefono'];
    $identificacion = $_POST['identificacion'];
    $servicio = $_POST['servicio'];
    $observaciones = $_POST['observaciones'];
    $total = $_POST['total'];

//enviamos datos a la base de datos usando sentencias preparadas
 $sql = "INSERT INTO clientes (nombrecliente, telefono, identificacion, servicio, observaciones, total) VALUES (?, ?, ?, ?, ?, ?)";
 $stmt = $conn->prepare($sql);
 if ($stmt === false) {
     die("Error en la preparación de la consulta: " . $conn->error);
 }
 $stmt->bind_param("ssssss", $nombre, $telefono, $identificacion, $servicio, $observaciones, $total);

//consultar
if ($stmt->execute()) {
    echo "Nuevo servicio registrado correctamente.";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
}
?>