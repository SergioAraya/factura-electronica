 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "borrar"; 
 $pagina = "facturas"; 
 if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) { 
 $facturas_id 		= mysql_real_escape_string($_REQUEST['facturas_id']); 
 include "./facturas/modelos/borrar.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
