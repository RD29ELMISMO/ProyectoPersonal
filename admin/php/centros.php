<?php

include '../conexion/conexion.php';

$centro = $_POST['centro'];
$ubicacion = $_POST['ubicacion'];
$telf = $_POST['telf'];
$ema = $_POST['ema'];
$info = $_POST['info'];
$repre = $_POST['repre'];

$imagen = $_FILES['foto']['name'];
$dirtemp = $_FILES['foto']['tmp_name'];
$destino = '../img/';


$arreglo = explode('.', $imagen);
$extension_img = strtolower(end($arreglo));
$extension_array_img = array('jpg', 'png', 'jpeg', 'gif');

if (in_array($extension_img, $extension_array_img)) {
    if (move_uploaded_file($dirtemp, $destino . $imagen)) {
        if (empty($centro) && empty($ubicacion)
            && empty($telf) && empty($ema) && empty($info) && empty($repre)) {
            header('Location:../otros/centros.php');
            echo 2;
        } else {
            $insertCentro = "INSERT INTO centro (foto,nombre,direccion,telefono,email,informacion, representante) 
             VALUES('$imagen','$centro','$ubicacion','$telf','$ema','$info','$repre')";
            $resultado = $conexion->query($insertCentro);
            echo 1;
            echo json_encode($resultado);

        }
    }
}


