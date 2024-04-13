<?php
include '../conexion/conexion.php';
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

$cadenaActualizar="UPDATE CLIENTES SET NOMBRE='$nombre', AP_PATERNO='$ap_paterno', AP_MATERNO='$ap_materno', CORREO='$correo', DIRECCION='$direccion', FECHA_NACIMIENTO='$fecha_nacimiento', TELEFONO='$telefono', SEXO='$sexo', CURP='$curp', CODIGO_POSTAL='$codigo_postal', FECHAHORA='$fechahora', ACTIVO='1' WHERE ID='$idCliente'";

$actualizar=mysqli_query($conexion,$cadenaActualizar);
echo "ok";
?>