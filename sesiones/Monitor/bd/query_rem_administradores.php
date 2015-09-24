<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
error_reporting(-1);

include("../../bd/conexion.php"); 

$doc_id=$_POST["doc_id"];


$conexion = conectarse();
$sql="delete from administradores where doc_id=".$doc_id;
$result = mysqli_query($conexion, $sql);

if($result)
{
echo "<script>var pagina='../index.php'; function redireccionar(){ parent.location.href=pagina; } setTimeout('redireccionar()',1);alert('Eliminacion Realizada');</script>";
}
else{
echo "<script>var pagina='../index.php'; function redireccionar(){ parent.location.href=pagina; } setTimeout('redireccionar()',1);alert('Documento de Identificación Incorrecto');</script>";
}