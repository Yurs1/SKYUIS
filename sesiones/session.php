<?php
session_start();
if(!(isset($_SESSION["pass"]))){
    session_destroy();
}
else {
    if(isset($_SESSION["user"])){
        header("Location: ./Conductor/conductor.php");
    }
    if(isset($_SESSION["admin"])){
        header("Location: ./Monitor/monitor.php");
    }   
}
?>

<html>
    <head>
        <title>Iniciar sesión | Monitoreo de Rutas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" media="screen" href="styleLogin.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans">
    </head>
    <body>
            <div class="box">
                <div class="logo">
                    <a href="../index.html"><img src="../Imagenes/logo.jpg" /></a>
                </div>
                <form method="post" action="bd_login.php">
                    <h1>Ingrese a su Cuenta</h1>
                    
                    <div class="login">
                    <input name="user" type="text" placeholder="Usuario"/> 
                    </div>
                    
                    <div class="pass">
                        <input name="pass" type="password" placeholder="Contraseña" />                      
                    </div>
                    
                    <div class="ingresar">
                    <input type="submit" value="Ingresar" />                    
                    <input type="radio" name="combo" value="conductor" checked>Conductor
                    <input type="radio" name="combo" value="monitor">Monitor
                    <br>
                    <br>
                    <a href="#">Registrate!</a>
                    <a href="#">Olvidé mi contraseña</a>
                    </div>
                    
                </form>
                <div class="volver">
                <a href="../index.html"><img src="../Imagenes/volver.png" /></a>
                </div>
            </div>
<footer>
    SKYUIS - TEAM<br>
    Universidad Industrial de Santander
</footer>
        
    </body>
</html>
