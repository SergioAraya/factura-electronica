<?php

/**
  magia_version: 0.0.8
 * */
$accion = "ver";
$pagina = "contactos";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    $inicia = (isset($_REQUEST['pag']) && $_REQUEST['pag'] != 0 ) ? $_REQUEST['pag'] * $cfg_limite_items_en_tablas : 0;
    // ordenamos por id por defecto 
    $ordenpor = (isset($_REQUEST['ordenpor']) && $_REQUEST['ordenpor'] != '' ) ? $_REQUEST['ordenpor'] : ' id ';
    //asc / desc
    $orden = (isset($_REQUEST['orden']) && $_REQUEST['orden'] != '' ) ? $_REQUEST['orden'] : ' DESC ';

    if (permisos_tiene_permiso('ver', 'contactos_otros', $_usuarios_grupo)) {
        include "./contactos/modelos/index_otros.php";
    } else {
        include "./contactos/modelos/index_mios.php";
    }

    include "../temas/" . _opciones_valor_segun_opcion('tema') . "/contactos/index.php";




    /*
      if (file_exists("../temas/" . _opciones_valor_segun_opcion('tema') . "/contactos/index.php")) {
      include "../temas/" . _opciones_valor_segun_opcion('tema') . "/contactos/index.php";
      } else {
      include "./contactos/vista/index.php";
      }
     * 
     */
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
} 
