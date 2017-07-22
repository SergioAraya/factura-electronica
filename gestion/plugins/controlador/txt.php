 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "ver"; 
 $pagina = "plugins"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $plugins_id 		= mysql_real_escape_string($_REQUEST['plugins_id']);   
     include "./plugins/modelos/ver.php"; 
     include "./plugins/reg/reg.php"; 
     include "./plugins/vista/txt.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
