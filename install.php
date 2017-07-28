<?php
include "admin/funciones.php";
if (file_exists('./admin/configuracion.php')) {
    header("Location: ./gestion/index.php");
    die("El archivo ./admin/configuracion.php ya ha sido creado,si quiere realizar una nueva instalacion debe borrarlo");
}
$a = (isset($_REQUEST["a"])) ? $_REQUEST["a"] : false;

function contenido_configuracion($servidor, $bdatos, $usuario, $clave) {
    $c = '<?php
switch ($_SERVER["SERVER_NAME"]) {
    case "127.0.0.1":
    case "localhost":
    //case "192.168.1.26":
        $bd_servidor = "'.$servidor.'";
        $bd_bdatos = "'.$bdatos.'";
        $bd_usuario = "'.$usuario.'";
        $bd_clave = "'.$clave.'";
    //    error_reporting(E_ALL);
    //    ini_set("display_errors", 1);
        break;
    case "http://www.misuperweb.be":
    case "audio.facturas.be":
    case "123.456.789.012":
        $bd_servidor = "localhost";
        $bd_bdatos = "Web_base";
        $bd_usuario = "user";
        $bd_clave = "1!eQ.ed(Ung0";
        break;
    default:
        break;
}        
// DATOS DE LA EMPRESA
$path_imagenes = "/var/www/html/";
$config_tema = "pato"; 
$config_debug = 0; 
$config_nombre_web = "Magia PHP";
$config_url = "https://github.com/robincoello/magia_php"; // sin / al final
$config_direccion = "Av del codigo abierto 1970, \n1000 Bruselas, \nBégica";
$config_tel = "+32(0)474 62 47 07";
$config_logo = "logo.png";
//
$config_grupo_por_defecto = "centros";
// si el numero de pedido es inferior a x cifras llenara con ceros en la parte izquierda 
// cuantas cifras debe tener min?
$config_ceros_bon = 6; 
// idioma por defecto del sistema
$cfg_idioma  = "es_ES"; 
$config_idioma  = $cfg_idioma; 
// limite de lineas en las tablas de los diferentes items 
$cfg_limite_items_en_tablas = 50; 
date_default_timezone_set("Europe/Brussels");
# configuracion del email 
# configuracion del email 
# configuracion del email 
# configuracion del email 
# configuracion del email 
# 
# email_nombres y apellidos
$config_email_nombre = "Robinson Coello S."; 
# email_usuario, generalmente formato email
$config_email_email = "info@web.com";
// suele ser el mismo email
$config_email_usuario = "robinson@facturas.be"; 
# email_clave, la clave del email
$config_email_clave = "125d4d4d4d4d4d4d4"; 
# email_pop, seridor entrante
$config_email_pop = "mail.facturas.be";
# email_pop_puerto
$config_email_pop_puerto = "995";
# email_smtp Servidor Saliente
$config_email_smtp = "mail.facturas.be";
# email_smtp_puerto
$config_email_smtp_puerto = "465";
// envio de emails
#contacto | admin | Motivo
#--------|-------|---------------------------------------------		 
#YES	| si	| al cambiar de estatus de un contacto
#YES	| si	| al crear un pedido 
#YES	| si 	| al editar un pedido -->> error, al editar el admin da error email
#YES	| si 	| cuando un usuario se registra
#YES	| si	| Cuando alguien solicita codigo para cambiar de clave
#YES	| si	| cuando alguien cambia la clave
#
$config_enviar_email_contacto_cambia_estatus = true;
$config_enviar_email_admin_cambia_estatus = true;
#
$config_enviar_email_contacto_crea_pedido = true;
$config_enviar_email_admin_crea_pedido = true;
#
$config_enviar_email_contacto_editar_pedido = true;
$config_enviar_email_admin_editar_pedido = true;
#
$config_enviar_email_contacto_auto_registro = true;
$config_enviar_email_admin_auto_registro = true;
#
$config_enviar_email_contacto_scc = true; // solicita cambio de clave
$config_enviar_email_admin_scc = true; // solicita cambio de clave
#
$config_enviar_email_contacto_cambia_clave = true;
$config_enviar_email_admin_cambia_clave = true;';

    return $c;
}



function form_instalacion() {
    echo '
                        <h1>Instalación</h1>
                        <form action="?" method="post">
                            <input type="hidden" name="a" value="instalar">
                            
                            <div class="form-group">
                                <label for="servidor">Servidor</label>
                                <input type="text" class="form-control" id="servidor" name="servidor" placeholder="localhost" value="localhost">
                            </div>
                            
                            <div class="form-group">
                                <label for="basedatos">Base de datos</label>
                                <input type="text" class="form-control" id="basedatos" name="bdatos" placeholder="magia" value="magia">
                            </div>
                            
                            
                            <div class="form-group">
                                <label for="usuario">Usuario</label>
                                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="root" value="root">
                            </div>
                                                        
                            
                            <div class="form-group">
                                <label for="clave">Clave</label>
                                <input type="text" class="form-control" id="clave" name="clave" placeholder="Clave de conección a la base de datos" value="clave">
                            </div>
                            
                            
                         

                            
                            


                            <button type="submit" class="btn btn-default">Continuar</button>
                        </form>
                        ';
}

function crear_archivo($nombre_archivo, $contenido) {
    // http://www.webioss.com/php/crear-y-escribir-en-un-archivo-con-php/
    // para crar logs
    // $nombre_archivo = "./admin/configuracion.php"; 

    if (file_exists($nombre_archivo)) {
        $mensaje = "El Archivo $nombre_archivo se ha modificado";
    } else {
        $mensaje = "El Archivo $nombre_archivo no existe";
    }

    if ($archivo = fopen($nombre_archivo, "w")) {
        if (fwrite($archivo, $contenido)) {
            chmod($nombre_archivo, 0777);
            echo "Se ha ejecutado correctamente";
        } else {
            echo "Ha habido un problema al crear el archivo";
        }

        fclose($archivo);
    }
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="favicon.ico">

        <title>Install</title>

        <!-- Bootstrap core CSS -->
        <link href="includes/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->



        <link href="carrusel.css" rel="stylesheet">
        <link href="estilo.css" rel="stylesheet">
    </head>

    <body>


        <div class="navbar-wrapper">
            <div class="container">
<?php //include "nav_superior.php";  ?>

            </div>
        </div>


        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-3">

                </div>
                <div class="col-lg-9">
                    <div class="row">

                        <hr>

<?php
switch ($a) {
    case 'instalar':
        $servidor = (isset($_POST['servidor'])) ? $_POST['servidor'] : false;
        $bdatos = (isset($_POST['bdatos'])) ? $_POST['bdatos'] : false;
        $usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : false;
        $clave = (isset($_POST['clave'])) ? $_POST['clave'] : false;
        if (!$servidor || !$bdatos || !$usuario || !$clave) {
            die("Debe !$servidor || !$bdatos || !$usuario || !$clave llenar todos los datos");
        }


        gestion_bd_crear_tabla($bdatos);


        $file = "./admin/configuracion.php";

        if (!file_exists($file)) {
            crear_archivo($file, contenido_configuracion($servidor, $bdatos, $usuario, $clave));
        }


        break;

    default:

        break;
}
?>




<?php 
if(!file_exists("./admin/configuracion.php")){
    form_instalacion();
}




?>








                    </div>
                </div>


            </div>








        </div><!-- /.container -->


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
        <script src="includes/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>


    </body>
</html>

