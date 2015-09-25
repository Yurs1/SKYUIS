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
        <meta charset="utf8-bin">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" media="screen" href="css/styleForm.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans">
        <script src="js/form.js"></script>
    </head>
    <body>
            <div class="box">
                <div class="logo">
                    <a href="monitor.php"><img src="img/logo.jpg" /></a>
                </div>

                <div class="form">
                <form method="post" action="query_add_recorridos.php">
                    <div class="titulo">
                    <h1>Crear Recorrido</h1>
                    </div>
                    
                    <div class="form">
                    <label>Seleccione Conductor</label>
                    <select name="conductor" size="1" >                        
                        <?php

                        $sql = "select * from conductor";
                        $result = mysqli_query($conexion, $sql);
                        
                        $listado = "";
                        while($row =  mysqli_fetch_array($result))
                        {
                            $idConductor = $row["idConductor"];
                            $Nombre = $row["Nombre"];
                            $Apellido = $row["Apellido"];                        
                            $listado = $listado."<option value=".$idConductor.">".$Nombre." ".$Apellido."</option>";
                        }
                        echo $listado;
                        ?>
                    </select>                    
                    </div>
                    
                    <div class="form">
                    <label>Seleccione Bus</label> 
                    <select name="bus" size="1" >                        
                        <?php

                        $sql2 = "select * from bus";
                        $result2 = mysqli_query($conexion, $sql2);
                        
                        $listado = "";
                        while($row =  mysqli_fetch_array($result2))
                        {
                            $idBus = $row["idBus"];
                            $Placa = $row["Placa"];
                            $Capacidad = $row["Capacidad"];                        
                            $listado = $listado."<option value=".$idBus.">".$idBus." - ".$Placa." - ".$Capacidad."</option>";
                        }
                        echo $listado;
                        ?>
                    </select>
                    </div>
                    
                    <div class="form">
                    <label>Elija la Ruta</label>                     
                    <select name="ruta" size="1" >                        
                        <?php
                        $sql3 = "select * from rutas";
                        $result3 = mysqli_query($conexion, $sql3);
                        
                        $listado = "";
                        while($row =  mysqli_fetch_array($result3))
                        {
                            $idRutas = $row["idRutas"];
                            $Nombre = $row["Nombre"];                       
                            $listado = $listado."<option value=".$idRutas.">".$Nombre."</option>";
                        }
                        echo $listado;
                        ?>
                    </select>
                    </div>                    

                    <div class="form">
                    <input type="submit" value="CREAR" />    
                    </div>    
                </form>                
                </div>

                <div class="volver">
                <a href="monitor.php"><img src="img/volver.png" /></a>
                </div>
            </div>
    </body>
        <footer>
            SKYUIS - TEAM<br>
            Universidad Industrial de Santander
        </footer>         
</html>