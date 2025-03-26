<?php
$servidor ='localhost';
$user = 'root';
$pass = "";
$db = 'motivado';
$conexion = new mysqli($servidor,$user,$pass,$db);

if($conexion){
    // echo 'exito';
}else{
    echo 'error';
}
