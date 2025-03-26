<?php
  include '../conexion/conexion.php';
  
  $id_centro = $_GET['codigo'];
  $sql = "DELETE FROM centro WHERE id_centro = '$id_centro'";
  $resultadoo = $conexion->query($sql);
  if($resultado){
    echo 1;
  }else{
    echo 2;
  }
?>