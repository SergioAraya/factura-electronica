<?php

/**
  magia_version: 0.0.8
 * */
$accion = "ver";
$pagina = "contactos";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    $contactos_id = mysql_real_escape_string($_REQUEST['contactos_id']);
    include "./contactos/modelos/ver.php";
    include "./contactos/reg/reg.php";
<<<<<<< HEAD
    
    
    $archivo_tema = "../temas/" . _opciones_valor_segun_opcion('tema') . "/admin/contactos/ver.php";
    if (file_exists($archivo_tema)) {
        include "$archivo_tema";
    } else {
        include "./contactos/vista/ver.php";
    }
    
    
    
=======
    // para pruebas
        if("../temas/$config_tema/contactos/ver.php"){
            include "../temas/$config_tema/contactos/ver.php";
        }else{
            include "./contactos/vista/ver.php";
        }
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
} 
