<?php
include '../conexion/conexion.php';

//Variable post 
$nombre = $_POST['nombre'];
$ap_paterno = $_POST['ap_paterno'];
$ap_materno = $_POST['ap_materno'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$telefono = $_POST['telefono'];
$sexo = $_POST['sexo'];
$curp = $_POST['curp'];
$codigo_postal = $_POST['codigo_postal'];

$cadenaInsertar ="INSERT INTO clientes (NOMBRE,AP_PATERNO,AP_MATERNO,CORREO,DIRECCION,FECHA_NACIMIENTO,TELEFONO,SEXO,CURP,CODIGO_POSTAL, FECHAHORA,ACTIVO,USUARIO)
 VALUES ('$nombre','$ap_paterno','$ap_materno','$correo','$direccion','$fecha_nacimiento','$telefono','$sexo','$curp','$codigo_postal','$fechahora','1','1' )";

$insertar = mysqli_query($conexion,$cadenaInsertar);
echo "ok";
?>