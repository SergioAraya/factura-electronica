 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "borrar"; 
 $pagina = "presupuestos"; 
 if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) { 
 $presupuestos_id 		= mysql_real_escape_string($_REQUEST['presupuestos_id']); 
 include "./presupuestos/modelos/borrar.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
