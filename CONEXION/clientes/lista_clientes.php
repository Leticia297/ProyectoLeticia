<?php
include '../conexion/conexion.php';
$datos=[];
$cadenaConsulta="SELECT ID,NOMBRE,AP_PATERNO,AP_MATERNO,CORREO,DIRECCION,FECHA_NACIMIENTO,TELEFONO,SEXO,CURP,CODIGO_POSTAL,FECHAHORA,ACTIVO,USUARIO FROM clientes where ACTIVO='1'";
$ConsultaClientes=mysqli_query($conexion,$cadenaConsulta);
while($row=mysqli_fetch_array($ConsultaClientes)){
    $btnEliminar="<button type='button' class='btn btn-sm btn btn-danger' onclick='eliminar($row[0])' >
    <i class='fa fa-trash' aria-hidden='true'></i></button>";
    $datos[]=[
        "id"=>$row[0],
        "nombre"=>$row[1],
        "ApPaterno"=>$row[2],
        "ApMaterno"=>$row[3],
        "correo"=>$row[4],
        "direccion"=>$row[5],
        "fechaNacimiento"=>$row[6],
        "telefono"=>$row[7],
        "sexo"=>$row[8],
        "curp"=>$row[9],
        "codigoPostal"=>$row[10],
        "fecha"=>$row[11],
        "opciones"=>$btnEliminar
        
        
    ];
}
echo json_encode($datos);
?>