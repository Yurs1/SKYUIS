<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
error_reporting(-1);

include("../../bd/conexion.php"); 

$doc_id=$_POST["doc_id"];
$nombre1=$_POST["nombre1"];
$nombre2=$_POST["nombre2"];
$apellido1=$_POST["apellido1"];
$apellido2=$_POST["apellido2"];
$fechadenac=$_POST["fechadenac"];
$genero=$_POST["genero"];
$email=$_POST["email"];
$telefono=$_POST["telefono"];
$password=$_POST["doc_id"]; 
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