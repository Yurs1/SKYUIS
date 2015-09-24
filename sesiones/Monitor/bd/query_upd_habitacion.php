<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
error_reporting(-1);

include("../../bd/conexion.php"); 

$codigo=$_POST["codigo"];
$precioxpersona=$_POST["precioxpersona"];
$minimo=$_POST["minimo"];
$maximo=$_POST["maximo"];

$conexion = conectarse();
$sql="update habitaciones set codigo=".$codigo.",precioxpersona=".$precioxpersona.",minimo=".$minimo.",maximo=".$maximo." where codigo=".$codigo;
$result = mysqli_query($conexion, $sql);

if($result)
{
echo "<script>var pagina='../index.php'; function redireccionar(){ parent.location.href=pagina; } setTimeout('redireccionar()',1);alert('Modificacion Satisfactoria');</script>";
}
else{
echo "<script>var pagina='../index.php'; function redireccionar(){ parent.location.href=pagina; } setTimeout('redireccionar()',1);alert('Error de operacion');</script>";
}