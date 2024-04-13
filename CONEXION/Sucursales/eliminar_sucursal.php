<?php
include '../conexion/conexion.php';
$idSucursal=$_POST['id'];

$cadenaEliminar="UPDATE SUCURSAL SET ACTIVO='0' WHERE ID='$idSucursal'";
$eliminar=mysqli_query($conexion,$cadenaEliminar);

echo "ok";
?>