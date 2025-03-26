<?php
include "../conexion/conexion.php";

// Escapar los datos recibidos para evitar inyecciones SQL
$nombre = $conexion->real_escape_string($_POST['nom']);
$email = $conexion->real_escape_string($_POST['email']);
$pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Consulta para insertar los datos en la tabla usuario
$sqlInsert = "INSERT INTO usuario (nombre, correo, pass) VALUES (?, ?, ?)";
$stmt = $conexion->prepare($sqlInsert);
$stmt->bind_param("sss", $nombre, $email, $pass);

// Ejecutar la consulta y devolver el resultado como JSON
if ($stmt->execute()) {
    echo json_encode(true); // Éxito
} else {
    echo json_encode(false); // Error
}

// Cerrar la conexión
$stmt->close();
$conexion->close();
?>
