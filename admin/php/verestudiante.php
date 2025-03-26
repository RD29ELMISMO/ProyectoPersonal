<?php 
include '../conexion/conexion.php';


$json = array();
$selectCentro = 'SELECT * FROM estudiante';
$query = $conexion->query($selectCentro);
while ($datos = $query->fetch_assoc())
    $json[] = $datos;


echo json_encode($json);

// consulta select de los profesores

