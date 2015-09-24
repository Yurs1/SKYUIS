<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
error_reporting(-1);

include("../../bd/conexion.php"); 

$tipo=$_POST["tipo"];
$nombre=$_POST["nombre"];

$conexion = conectarse();
$sql="update camas set tipo=".$tipo.", nombre='".$nombre."' where tipo=".$tipo;
$result = mysqli_query($conexion, $sql);

if($result)
{
echo "<script>var pagina='../index.php'; function redireccionar(){ parent.location.href=pagina; } setTimeout('redireccionar()',1);alert('Modificacion Satisfactoria');</script>";
}
else{
echo "<script>var pagina='../index.php'; function redireccionar(){ parent.location.href=pagina; } setTimeout('redireccionar()',1);alert('Error de operacion');</script>";
}