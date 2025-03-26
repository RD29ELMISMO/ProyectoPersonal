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
$stmt = mysqli_prepare($conexion, $sql);
mysqli_stmt_bind_param($stmt, "s", $correo);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

// 2. Verificar si el usuario existe
if (mysqli_num_rows($result) > 0) {
    $usuario = mysqli_fetch_assoc($result);
    
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

mysqli_stmt_close($stmt);
mysqli_close($conexion);
?>