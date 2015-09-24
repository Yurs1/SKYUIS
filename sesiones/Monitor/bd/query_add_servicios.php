<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
error_reporting(-1);

include("../../bd/conexion.php"); 

$nombre=$_POST["nombre"];

$conexion = conectarse();

$sql = "select codigo from servicios order by codigo desc limit 1";
$result = mysqli_query($conexion, $sql);
$row = mysqli_fetch_array($result);
$codigo = $row["codigo"]+1;

$sql2="insert into servicios (codigo,nombre) values('$codigo','$nombre')";
$result2 = mysqli_query($conexion, $sql2);

if($result2)
{
echo "<script>var pagina='../index.php'; function redireccionar(){ parent.location.href=pagina; } setTimeout('redireccionar()',1);alert('Insercion Satisfactoria');</script>";
}
else{
echo "<script>var pagina='../index.php'; function redireccionar(){ parent.location.href=pagina; } setTimeout('redireccionar()',1);alert('Error de insercion');</script>";
}