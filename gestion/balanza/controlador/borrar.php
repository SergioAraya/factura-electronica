 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "borrar"; 
 $pagina = "balanza"; 
 if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) { 
 $balanza_id 		= mysql_real_escape_string($_REQUEST['balanza_id']); 
 include "./balanza/modelos/borrar.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
