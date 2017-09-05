 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "ver"; 
 $pagina = "balanza"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $balanza_id 		= mysql_real_escape_string($_REQUEST['balanza_id']);   
     include "./balanza/modelos/ver.php"; 
     include "./balanza/reg/reg.php"; 
     include "./balanza/vista/txt.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
