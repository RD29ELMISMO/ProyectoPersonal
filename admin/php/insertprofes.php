<?php
include '../conexion/conexion.php';

$nom = $_POST["profe_n"];
$ape = $_POST["profe_a"];
$edad = $_POST["profe_edad"];
$telf = $_POST["telefono"];
$ema = $_POST["ema"];
$ubicacion = $_POST["ubicacion"];
$nivel = $_POST["nivel"];

$nomfoto = $_FILES['foto']['name'];
$ruta = '../img/estudiante/';
$dirtemp = $_FILES['foto']['tmp_name'];


$arreglo = explode('.', $nomfoto);
$extension_img = strtolower(end($arreglo));
$extension_array_img = array('jpg', 'png', 'jpeg', 'gif');


if (in_array($extension_img, $extension_array_img)) {
    if (move_uploaded_file($dirtemp, $ruta . $nomfoto)) {
        if (
            empty($nom) && empty($ape)
            && empty($edad) && empty($tutor) && empty($telf_tutor)
            && empty($ubicacion) && empty($email)
        ) {
            // header('Location:../otros/centros.php');
            // echo 'error';
        } else {
            $insert = "INSERT INTO profesor (foto,nombre,apellido,edad,contacto,
            email,Ubicacion,nivel_academico)
            VALUES ('$nomfoto','$nom','$ape','$edad','$telf','$ema','$ubicacion','$nivel')";
            $resultado = $conexion->query($insert);
            echo json_encode($resultado);
        }
    }
};