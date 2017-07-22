 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "borrar"; 
 $pagina = "plugins"; 
 if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) { 
 $plugins_id 		= mysql_real_escape_string($_REQUEST['plugins_id']); 
 include "./plugins/modelos/borrar.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
