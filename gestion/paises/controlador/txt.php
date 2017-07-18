 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "ver"; 
 $pagina = "paises"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $paises_id 		= mysql_real_escape_string($_REQUEST['paises_id']);   
     include "./paises/modelos/ver.php"; 
     include "./paises/reg/reg.php"; 
     include "./paises/vista/txt.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
