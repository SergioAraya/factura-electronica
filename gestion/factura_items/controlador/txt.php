 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "ver"; 
 $pagina = "factura_items"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $factura_items_id 		= mysql_real_escape_string($_REQUEST['factura_items_id']);   
     include "./factura_items/modelos/ver.php"; 
     include "./factura_items/reg/reg.php"; 
     include "./factura_items/vista/txt.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
