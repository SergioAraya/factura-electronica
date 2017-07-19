 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "ver"; 
 $pagina = "bancos"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $bancos_id 		= mysql_real_escape_string($_REQUEST['bancos_id']);   
     include "./bancos/modelos/ver.php"; 
     include "./bancos/reg/reg.php"; 
     include "./bancos/vista/txt.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
