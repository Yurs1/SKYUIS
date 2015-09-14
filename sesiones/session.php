<?php


$user = $_POST['user'];
$password = $_POST['password'];
echo $user, $password

?>
<?php
session_start();
if(!(isset($_SESSION["password"]))){
    session_destroy();
}
else {
    if(isset($_SESSION["user"])){
        header("Location: ./public/client.php");
    }
    if(isset($_SESSION["admin"])){
        header("Location: ./admin/index.php");
    }   
}
?>
<html>
    <head>
        <title>Iniciar sesión | Monitoreo de Rutas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" media="screen" href="public/css/styleLogin.css">
    </head>
    <body>
            <div class="box">
                <div class="logo">
                    <a href="index.php"><img src="public/img/logo.png" /></a>
                </div>
                <form method="post" action="bd/bd_login.php">
                    <h1>Ingrese a su Cuenta</h1>
                    
                    <div class="login">
                    <input name="user" type="text" placeholder="Usuario"/> 
                    </div>
                    
                    <div class="pass">
                        <input name="pass" type="password" placeholder="Contraseña" />                      
                    </div>
                    
                    <div class="ingresar">
                    <input type="submit" value="Ingresar" />
                    <select name="combo" size="1" >
                        <option value="cliente">Usuario Hotel</option>
                        <option value="admin">Administrador</option>
                    </select>
                    
                    <br>
                    <br>
                    <a href="#">Registrate!</a>
                    <a href="#">Olvidé mi contraseña</a>
                    </div>
                    
                </form>
                <div class="volver">
                <a href="index.php"><img src="public/img/volver.png" /></a>
                </div>
            </div>
        <div class="footer"></div> 
        
    </body>
</html>
