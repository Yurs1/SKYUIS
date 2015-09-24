<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
error_reporting(-1);

include("../../bd/conexion.php"); 

$conexion = conectarse();
$habitacion = $_POST["habitacion"];

// CAMAS
$sql = "select * from camas";
$result = mysqli_query($conexion, $sql);
// SERVICIOS
$sql2 = "select * from servicios";
$result2 = mysqli_query($conexion, $sql2);

while ($row = mysqli_fetch_array($result)) {  
    $tipo = $row["tipo"];        
    $name = "C".$tipo;
    $cantidad=$_POST[$name];
    $condicional = "AC".$tipo;
    if(($_POST[$condicional]) == "update"){
        $sql3 = "update hc set habitaciones_codigo1='".$habitacion."', camas_tipo1='".$tipo."', cantidad=".$cantidad." where habitaciones_codigo1='".$habitacion."' and camas_tipo1='".$tipo."'";
    }
    else{
        $sql3= "insert into hc (habitaciones_codigo1,camas_tipo1,cantidad) values('$habitacion','$tipo','$cantidad')";    
    }
    $result3 = mysqli_query($conexion, $sql3);
}
   
while ($row2 = mysqli_fetch_array($result2)) {  
    $codigo = $row2["codigo"];
    $name = "S".$codigo;
    if(isset($_POST[$name])){
        $control=$_POST[$name];
    }
    else{
        $control = "X";
    }
    $condicional = "AS".$codigo;
    if(($_POST[$condicional]) == "update"){    
        $sql4 = "update hs set habitaciones_codigo1='".$habitacion."', servicios_codigo1='".$codigo."', control='".$control."' where habitaciones_codigo1='".$habitacion."' and servicios_codigo1='".$codigo."'";
    }
    else{
        $sql4 = "insert into hs (servicios_codigo1,habitaciones_codigo1,control) values('$codigo','$habitacion','$control')";
    }
    $result4 = mysqli_query($conexion, $sql4);
}

echo "<script>var pagina='../index.php'; function redireccionar(){ parent.location.href=pagina; } setTimeout('redireccionar()',1);alert('Insercion Satisfactoria');</script>";




