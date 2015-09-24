<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
error_reporting(-1);

session_start();

include('../bd/conexion.php');

$user=$_POST["user"];
$pass=$_POST["pass"];
$tipo=$_POST["combo"];

$conexion = conectarse();

if ($tipo=="conductor"){
    $sql="select * from conductor where idConductor='$user' and Password='$pass'";
    $result = mysqli_query($conexion, $sql);

    $nr = mysqli_num_rows($result);
    if ($nr==0) 
    {
        
        echo "<script>var pagina='../session.php'; function redireccionar(){ parent.location.href=pagina; } setTimeout('redireccionar()',1);alert('Intente nuevamente');</script>";
        session_destroy();
    }
    else 
    {
    $row = mysqli_fetch_array($result);
    $_SESSION["user"]= $user;
    $_SESSION["pass"]=$pass;
    $_SESSION["nombre"]=$row["Nombre"];

    header("Location: ./Conductor/conductor.php");
    exit();    
    }
}
else{
    if ($tipo=="monitor") {
        $sql="select * from monitores where User='$user' and Password='$pass'";
        $result = mysqli_query($conexion, $sql);

        $nr = mysqli_num_rows($result);
        if ($nr==0) 
        {
            
            echo "<script>var pagina='../session.php'; function redireccionar(){ parent.location.href=pagina; } setTimeout('redireccionar()',1);alert('Intente nuevamente');</script>";
            session_destroy();
        }
        else 
        {
            $row = mysqli_fetch_array($result);
            $_SESSION["admin"]= $user;
            $_SESSION["pass"]=$pass;
            $_SESSION["nombre"]=$row["Nombre"];

            header("Location: ./Monitor/monitor.php");
            exit();
        }
    }
}


