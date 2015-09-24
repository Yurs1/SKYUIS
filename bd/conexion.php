<?php // SKYUIS
/* Verificacion de error de codificacion*/
error_reporting(E_ALL);
ini_set('display_errors', '1');
error_reporting(-1);

/*Funcion de conexion*/
$conn=NULL;

function conectarse() 
{ 
   if (!($conn=mysqli_connect("localhost", "skyuis", "5yrQ74X6yRw8FQbW", "mydb"))) 
   { 
      echo "ERROR CONECTANDO A LA BASE DE DATOS."; 
      exit(); 
   } 
  return $conn; 
 }  

/* 	SI NO FUNCIONA LA CONEXION ES PORQUE NO SE HA AÑADIDO EL USUARIO A LA BASE DE DATOS DESDE PHPMYADMIN 
	NOMBRE: skyuis
	CLAVE: 5yrQ74X6yRw8FQbW 
*/