<!DOCTYPE html>
<?PHP
/* Verifica errores de codificacion*/
error_reporting(E_ALL);
ini_set('display_errors', '1');
error_reporting(-1);
session_start();

if (!(isset($_SESSION["admin"])))
{
    session_destroy();
    header("Location: ../../index.html");
}
/*Importacion de la conexion*/

$admin = $_SESSION["admin"];
$clave = $_SESSION["pass"];
$nombre=$_SESSION["nombre"];
include('../../bd/conexion.php');
?>
<html>
    <head><title>Monitor | Transmetro</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" type="text/css" media="screen" href="css/styleAdmin.css">
        <link rel="stylesheet" type="text/css" media="screen" href="css/styleMenu.css">
        <link rel="stylesheet" type="text/css" media="screen" href="css/fonts/style.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans">	
        <script src="js/jquery-latest.js"></script>
        <script src="js/menu.js"></script>
    </head>
    <body>
        <header>

        <div id="logo">
            <img src="img/logo.jpg">
        </div>
        <div id="timestamp" onload="mueveReloj()">
            <script src="js/timestamp.js"></script>            
            <div class="recuadro3">  
            <form name="reloj12">
                <script type="text/javascript">
                    MostrarFecha();
                </script>  
                <input type="text" size="14" name="digitos" disabled>  
            </form>
            </div>
        </div>
            <div id="sesion">
                <?php echo $nombre."        |   "; ?>
                <a href='../logout.php'>Cerrar sesion<span class="icon-exit"></span></a>
            </div>
        </header>
        
        <div class="screen">
        MAPA
        </div>        
        
        <div class="content" id="content">
            <div class="buttons">                
                <a class="button1" href="CrearRecorrido.php"><span class="icon-plus"></span>AÑADIR RECORRIDOS</a>
                <a class="button1" href="EliminarRecorridos.php"><span class="icon-cancel-circle"></span>ELIMINAR RECORRIDOS</a>
                <a class="button2" href="#">AVANZAR!</a>  
                <a class="button3" href="#">DISMINUIR</a>                                                                  
            </div>
            <div class="info">
            <?php            
                echo "<h1>MODULO DE ADMINISTRACION</h1><br><h2>Bienvenido ".$nombre."</h2>";                        
            ?>
            </div>
          
        </div>    
    </body>
</html>