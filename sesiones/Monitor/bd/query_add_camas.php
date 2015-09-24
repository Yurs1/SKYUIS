<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
error_reporting(-1);

include("../../bd/conexion.php"); 

$nombre=$_POST["nombre"];

$conexion = conectarse();

$sql = "select tipo from camas order by tipo desc limit 1";
$result = mysqli_query($conexion, $sql);
$row = mysqli_fetch_array($result);
$tipo = $row["tipo"]+1;

$sql2="insert into camas (tipo,nombre) values('$tipo','$nombre')";
$result2 = mysqli_query($conexion, $sql2);

if($result2)
{
echo "<script>var pagina='../index.php'; function redireccionar(){ parent.location.href=pagina; } setTimeout('redireccionar()',1);alert('Insercion Satisfactoria');</script>";
}
else{
echo "<script>var pagina='../index.php'; function redireccionar(){ parent.location.href=pagina; } setTimeout('redireccionar()',1);alert('Error de insercion');</script>";
}