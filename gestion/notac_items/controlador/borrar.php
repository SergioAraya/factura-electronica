 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "borrar"; 
 $pagina = "notac_items"; 
 if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) { 
 $notac_items_id 		= mysql_real_escape_string($_REQUEST['notac_items_id']); 
 include "./notac_items/modelos/borrar.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
