<?php

//Configuracion de la conexion a base de datos
$bd_host = "localhost"; 
$bd_usuario = "ejem"; 
$bd_password = "ejem"; 
$bd_base = "transmetro"; 

$con = mysql_connect($bd_host, $bd_usuario, $bd_password); 

mysql_select_db($bd_base, $con); 	

//consulta todos los rutas_has_bus

$sql=mysql_query("SELECT * FROM rutas_has_bus",$con);	
//muestra los datos consultados
echo "Fecha " ."	-	". "Bus " ."	-	". "Ruta  "." \n" ."<br>";
while($row = mysql_fetch_array($sql)){
	echo "".$row['HoraDeOperacion']."	-	".$row['Bus_idBus']."	-	".$row['Rutas_idRutas']." \n" ."<br>" ;
}
?>
