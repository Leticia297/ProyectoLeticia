<?php
include '../conexion/conexion.php';
$idPerfil=$_POST['id'];

$cadenaEliminar="UPDATE PERFILES SET ACTIVO='0' WHERE ID='$idPerfil'";
$eliminar=mysqli_query($conexion,$cadenaEliminar);

echo "ok";
?>