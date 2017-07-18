 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "borrar"; 
 $pagina = "cp_ville"; 
 if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) { 
 $cp_ville_id 		= mysql_real_escape_string($_REQUEST['cp_ville_id']); 
 include "./cp_ville/modelos/borrar.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
