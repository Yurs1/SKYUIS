<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
error_reporting(-1);

include("../../bd/conexion.php"); 

$conductor=$_POST["conductor"];
$bus=$_POST["bus"];
$ruta=$_POST["ruta"];


/*
$date = localtime();
$time = date_format($date, 'Y-m-d H:i:s');
echo $time;
$time=date(a)."-".date(m)."-".date(d)." ".date(h);
*/
// POR DEFECTO SE DEJA COMO CLAVE EL DOCUMENTO DE IDENTIDAD

$conexion = conectarse();
$sql="insert into administradores (doc_id,nombre1,nombre2,apellido1,apellido2,fechadenac,genero,email,telefono,password) values('$doc_id','$nombre1','$nombre2','$apellido1','$apellido2','$fechadenac','$genero','$email','$telefono','$password')";
$result = mysqli_query($conexion, $sql);

if($result)
{
echo "<script>var pagina='../index.php'; function redireccionar(){ parent.location.href=pagina; } setTimeout('redireccionar()',1);alert('Insercion Satisfactoria');</script>";
}
else{
echo "<script>var pagina='../index.php'; function redireccionar(){ parent.location.href=pagina; } setTimeout('redireccionar()',1);alert('Error de insercion');</script>";
}