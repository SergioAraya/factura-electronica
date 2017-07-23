<?php
if(!file_exists('../admin/configuracion.php')){
    header("Location: ../install.php");
}
session_start("magia_php");
include "z_verificar.php";
include "../admin/bd.php";
include "../admin/errores.php";
include "../admin/funciones.php";
include "../admin/configuracion.php";
include "../admin/coneccion.php";
include "../admin/conec.php";
include "../admin/funciones_sql.php";
include "../admin/getbootstrap.php";
include "../admin/permisos.php";
include "../admin/traductor.php";
include "../admin/contenido.php";
include "../admin/formularios.php";
include "../admin/moneda.php";
include "../admin/menu.php";
include "../admin/mensajes.php";
include "../admin/paginacion.php";
include "../admin/t_usuarios.php";
include "../temas/pato/funciones.php";
//include "../gestion/_opciones/funciones.php";
///require '../includes/PHPMailer-5.2.23/PHPMailerAutoload.php';
_incluir_funciones();
$aqui_seccion = "";
$aqui_pagina = "";
$_usuarios_idioma = contactos_campo_segun_email('idioma', $_usuarios_usuario);

$p = (isset($_REQUEST['p'])) ? $_REQUEST['p'] : "home";
$c = (isset($_REQUEST['c'])) ? $_REQUEST['c'] : "index";

// para las paginaciones de todas las paginas
$pag = (isset($_REQUEST['pag'])) ? $_REQUEST['pag'] : 0;
// header
include "../temas/" . _opciones_valor_segun_opcion('tema') . "/header.php";
//
include './' . $p . '/controlador/' . $c . '.php';
// footer
include "../temas/" . _opciones_valor_segun_opcion('tema') . "/footer.php";
?>

