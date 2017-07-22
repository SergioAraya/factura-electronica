<?php
/**
 * 
 */
$pagina = "home";
$accion = "ver";
//$id_contacto 			= mysql_real_escape_string($_GET['id_contacto']);
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo) == true) {
    include "home/modelo/temas.php";
    include "home/vista/temas.php";
} else {
    permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
}