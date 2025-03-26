<?php
include '../conexion/conexion.php';

$id = $_GET['id'];

$sql = "DELETE FROM estudiante WHERE id_estudiante = $id";

$eliminado = $conexion->query($sql);

if($eliminado) {
    echo "El estudiante ha sido eliminado correctamente.";
}