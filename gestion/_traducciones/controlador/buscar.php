<<<<<<< HEAD
<?php

/**
  magia_version: 0.0.8
 * */
$accion = "ver";
$pagina = "_traducciones";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {

    $inicia = (isset($_REQUEST['pag']) && $_REQUEST['pag'] != 0 ) ? $_REQUEST['pag'] * $cfg_limite_items_en_tablas : 0;


    include "./_traducciones/reg/get.php";

    include "./_traducciones/modelos/buscar.php";
    include "./_traducciones/vista/index.php";
    
    
    
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
} 
=======
 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "ver"; 
 $pagina = "_traducciones"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     
  $inicia = (isset($_REQUEST['pag']) && $_REQUEST['pag'] != 0 ) ? $_REQUEST['pag'] * $cfg_limite_items_en_tablas : 0;   
  
  
     include "./_traducciones/reg/get.php"; 
     
     include "./_traducciones/modelos/buscar.php"; 
     include "./_traducciones/vista/index.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
