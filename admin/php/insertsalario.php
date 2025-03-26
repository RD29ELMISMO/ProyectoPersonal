<?php
include "../conexion/conexion.php";
$id = $_GET["id"];
$profe = $_POST['profe_n'];
$monto = $_POST['monto'];
$fecha = $_POST['fecha'];

$insertar = "INSERT INTO Salario (profe_nombre, monto, fecha)
 VALUES ('$profe', '$monto', '$fecha')";
 $resultado = $conexion->query($insertar);
 
