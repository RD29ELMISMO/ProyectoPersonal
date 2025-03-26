<?php
include '../conexion/conexion.php';

$nom = $_POST["estudiante_n"];
$ape = $_POST["estudiante_a"];
$edad = $_POST["estudiante_edad"];
$tutor = $_POST["tutor"];
$telf_tutor = $_POST["tutor_telf"];
$ubicacion = $_POST["ubicacion"];
$email = $_POST["email"];

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
            $insert = "INSERT INTO estudiante (foto,nombre,apellido,edad,tutor,
            telf_tutor,Ubicacion,correo)
            VALUES ('$nomfoto','$nom','$ape','$edad','$tutor','$telf_tutor','$ubicacion','$email')";
            $resultado = $conexion->query($insert);
            echo json_encode($resultado);
        }
    }
};




