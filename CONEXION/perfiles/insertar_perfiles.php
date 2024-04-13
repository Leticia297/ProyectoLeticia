<?php
include '../conexion/conexion.php';

//variables POST
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];

$cadenaInsertar="INSERT INTO perfiles (NOMBRE, DESCRIPCION, FECHAHORA, ACTIVO, USUARIO)VALUES('$nombre','$descripcion','$fechahora','1','1')";

$insertar=mysqli_query($conexion,$cadenaInsertar);
echo "ok";
?>