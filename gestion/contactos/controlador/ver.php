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
        if("../temas/magia/contactos/ver.php"){
            include "../temas/magia/contactos/ver.php";
        }else{
            include "./contactos/vista/ver.php";
        }
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
} 
