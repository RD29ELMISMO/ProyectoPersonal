<?php
include "../conexion/conexion.php";
$id_salario = $_GET["id_profe"];

$json = array();
$querySelecr = "SELECT s.monto, s.fecha, p.nombre FROM Salario s  
INNER JOIN profesor p ON p.id_prof = s.profesor
 WHERE profesor = '$id_salario' ";
$res = $conexion->query($querySelecr);
while($datos=$res->fetch_assoc())
    $json[] = $datos;

    echo json_encode($json);