<?php 
include '../conexion/conexion.php';

$sql = "SELECT COUNT(*) FROM profesor";
$result = $conexion->query($sql);
$datos = $result->fetch_assoc();
echo $datos['COUNT(*)'];

$select = "SELECT COUNT(*) FROM estudiante";
$result = $conexion->query($select);
$datos = $result->fetch_assoc();
echo $datos['COUNT(*)'];

$select = "SELECT COUNT(*) FROM centro";
$result = $conexion->query($select);
$datos = $result->fetch_assoc();
echo $datos['COUNT(*)'];