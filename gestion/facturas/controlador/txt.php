 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "ver"; 
 $pagina = "facturas"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $facturas_id 		= mysql_real_escape_string($_REQUEST['facturas_id']);   
     include "./facturas/modelos/ver.php"; 
     include "./facturas/reg/reg.php"; 
     include "./facturas/vista/txt.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
