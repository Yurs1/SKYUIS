<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
error_reporting(-1);

include("../../bd/conexion.php"); 

$conductor=$_POST["conductor"];
$bus=$_POST["bus"];
$ruta=$_POST["ruta"];
date_default_timezone_set("America/Bogota"); 
$time = time();
$time = date("Y-m-d H:i:s",$time);

// POR DEFECTO SE DEJA COMO CLAVE EL DOCUMENTO DE IDENTIDAD

$conexion = conectarse();
$sql="insert into bus_has_conductor (Bus_idBus, Conductor_idConductor) values('$bus','$conductor')";
$result = mysqli_query($conexion, $sql);

if($result)
{
	$sql2="insert into rutas_has_bus (Rutas_idRutas, Bus_idBus, HoraDeOperacion) values('$ruta','$bus','$time')";
	$result2 = mysqli_query($conexion, $sql2);
	if($result2){
		echo "<script>var pagina='monitor.php'; function redireccionar(){ parent.location.href=pagina; } setTimeout('redireccionar()',1);alert('Insercion Satisfactoria - Recorrido Creado');</script>";
	}
	else{
		echo "<script>var pagina='monitor.php'; function redireccionar(){ parent.location.href=pagina; } setTimeout('redireccionar()',1);alert('Error de insercion en la BD');</script>";		
	}
}
else{
echo "<script>var pagina='monitor.php'; function redireccionar(){ parent.location.href=pagina; } setTimeout('redireccionar()',1);alert('El conductor y Bus ya están Asignados');</script>";
}
