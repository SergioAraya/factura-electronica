<?php

/**
  magia_version: 0.0.8
 * */
$accion = "buscar";
$pagina = "contactos";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {

    $inicia = (isset($_REQUEST['pag']) && $_REQUEST['pag'] != 0 ) ? $_REQUEST['pag'] * $cfg_limite_items_en_tablas : 0;
    $b = (isset($_REQUEST['b'])) ? mysql_real_escape_string(trim($_REQUEST['b'])) : false;

        // ordenamos por id por defecto 
    $ordenpor   = (isset($_REQUEST['ordenpor']) && $_REQUEST['ordenpor'] != '' ) ? $_REQUEST['ordenpor']  : 'id';
    //asc / desc
    $orden   = (isset($_REQUEST['orden']) && $_REQUEST['orden'] != '' ) ? $_REQUEST['orden']  : 'ASC';
    
    include "./contactos/modelos/buscar.php";

<<<<<<< HEAD
         $archivo_tema = "../temas/". _opciones_valor_segun_opcion('tema')."/contactos/index.php";
     if(file_exists($archivo_tema)){
         include "$archivo_tema"; 
     }else{
         include "./contactos/vista/index.php"; 
     }
=======
    include "./contactos/vista/index.php";
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
} 
