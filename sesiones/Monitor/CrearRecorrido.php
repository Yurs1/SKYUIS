<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
error_reporting(-1);
include('../../bd/conexion.php');
$conexion = conectarse();
?>
<html>
    <head>
        <title>Recorridos | Transmetro</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" media="screen" href="css/styleForm.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans">
        <script src="js/form.js"></script>
    </head>
    <body>
            <div class="box">
                <div class="logo">
                    <a href="index.php"><img src="img/logo.png" /></a>
                </div>

                <div class="form">
                <form method="post" action="query_add_recorridos.php">
                    <div class="titulo">
                    <h1>Crear Recorrido</h1>
                    </div>
                    
                    <div class="form">
                    <label>Seleccione Conductor</label>
                    <input name="conductor" type="text" placeholder="Identificación"/>   
                    </div>
                    
                    <div class="form">
                    <label>Seleccione Bus</label> 
                    <input name="bus" type="text" placeholder="Primer Nombre" />
                    </div>
                    
                    <div class="form">
                    <label>Elija la Ruta</label> 
                    <input name="ruta" type="text" placeholder="Segundo Nombre" />
                    </div>                    

                    <div class="form">
                    <input type="submit" value="CREAR" />    
                    </div>    
                </form>                
                </div>

                <div class="volver">
                <a href="index.php"><img src="img/volver.png" /></a>
                </div>
            </div>
        <div class="footer"></div> 
        
    </body>
</html>