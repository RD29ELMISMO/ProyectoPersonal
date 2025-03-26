<?php

include '../conexion/conexion.php';

$json = array();

$sql = "SELECT * FROM profesor";

$result = $conexion->query($sql);

while($row = $result->fetch_assoc()) 
    $json[] = $row;

    echo json_encode($json);