 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "borrar"; 
 $pagina = "factura_items"; 
 if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) { 
 $factura_items_id 		= mysql_real_escape_string($_REQUEST['factura_items_id']); 
 include "./factura_items/modelos/borrar.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
