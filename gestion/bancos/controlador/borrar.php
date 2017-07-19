 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "borrar"; 
 $pagina = "bancos"; 
 if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) { 
 $bancos_id 		= mysql_real_escape_string($_REQUEST['bancos_id']); 
 include "./bancos/modelos/borrar.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
