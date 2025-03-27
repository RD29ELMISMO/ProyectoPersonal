<?php
session_start();
include '../conexion/conexion.php';

// Validar que los datos existan
if (!isset($_POST['email'], $_POST['password'])) {
    die("Datos incompletos");
}

$correo = $_POST['email'];
$password = $_POST['password'];

// 1. Buscar el usuario por correo (usando sentencias preparadas)
$sql = "SELECT * FROM usuario WHERE correo = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("s", $correo);
$stmt->execute();
$result = $stmt->get_result();

// 2. Verificar si el usuario existe
if ($result->num_rows > 0) {
    $usuario = $result->fetch_assoc();
    
    // 3. Verificar la contraseña
    if (password_verify($password, $usuario['pass'])) {
        $_SESSION['usuario'] = $correo;
        $_SESSION['nombre'] = $usuario['nombre'];
        echo 1;
        exit();
    } else {
        echo "Contraseña incorrecta.";
    }
} else {
    echo "El correo no existe.";
}

$stmt->close();
$conexion->close();
?>