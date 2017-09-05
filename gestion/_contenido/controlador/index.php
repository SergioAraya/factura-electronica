 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "ver"; 
 $pagina = "_contenido"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
  $inicia = (isset($_REQUEST['pag']) && $_REQUEST['pag'] != 0 ) ? $_REQUEST['pag'] * $cfg_limite_items_en_tablas : 0;    
     include "./_contenido/modelos/index.php"; 
<<<<<<< HEAD
     include "./_contenido/vista/index.php"; 
=======
     include "./_contenido/vista/correccion.php"; 
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
