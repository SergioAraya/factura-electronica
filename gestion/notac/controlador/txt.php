 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "ver"; 
 $pagina = "notac"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $notac_id 		= mysql_real_escape_string($_REQUEST['notac_id']);   
     include "./notac/modelos/ver.php"; 
     include "./notac/reg/reg.php"; 
     include "./notac/vista/txt.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
