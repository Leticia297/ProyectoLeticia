<?php
include '../conexion/conexion.php';
$idPerfil=$_POST['id'];
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];

$cadenaActualizar="UPDATE PERFILES SET NOMBRE='$nombre', DESCRIPCION='$descripcion',FECHAHORA='$fechahora',ACTIVO='1',USUARIO='1' WHERE ID='$idPerfil'";

$actualizar=mysqli_query($conexion,$cadenaActualizar);
echo "ok";
?>