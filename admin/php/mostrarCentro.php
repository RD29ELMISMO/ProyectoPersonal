<?php
include "../conexion/conexion.php";

$json = array();
$selectCentro = 'SELECT id_centro, foto, nombre, direccion, telefono, email, representante FROM centro';
$query = $conexion->query($selectCentro);
while ($datos = $query->fetch_assoc())
    $json[] = $datos;


echo json_encode($json);