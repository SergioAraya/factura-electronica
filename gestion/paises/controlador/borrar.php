 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "borrar"; 
 $pagina = "paises"; 
 if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) { 
 $paises_id 		= mysql_real_escape_string($_REQUEST['paises_id']); 
 include "./paises/modelos/borrar.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
