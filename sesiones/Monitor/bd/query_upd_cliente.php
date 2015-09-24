<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
error_reporting(-1);

include("../../bd/conexion.php"); 

$doc_id=$_POST["doc_id"];
$doc_idN=$_POST["doc_idN"];
$nombre1=$_POST["nombre1"];
$nombre2=$_POST["nombre2"];
$apellido1=$_POST["apellido1"];
$apellido2=$_POST["apellido2"];
$fechadenac=$_POST["fechadenac"];
$genero=$_POST["genero"];
$email=$_POST["email"];
$telefono=$_POST["telefono"];
$password=$_POST["password"]; 

$conexion = conectarse();
$sql="update clientes set doc_id='".$doc_idN."',nombre1='".$nombre1."',nombre2='".$nombre2."',apellido1='".$apellido1."',apellido2='".$apellido2."',fechadenac='".$fechadenac."',genero='".$genero."',email='".$email."',telefono='".$telefono."',password='".$password."' where doc_id='".$doc_id."'";
$result = mysqli_query($conexion, $sql);

if($result)
{
echo "<script>var pagina='../index.php'; function redireccionar(){ parent.location.href=pagina; } setTimeout('redireccionar()',1);alert('Modificacion Satisfactoria');</script>";
}
else{
echo "<script>var pagina='../index.php'; function redireccionar(){ parent.location.href=pagina; } setTimeout('redireccionar()',1);alert('Error de operacion');</script>";
}