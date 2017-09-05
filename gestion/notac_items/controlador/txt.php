 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "ver"; 
 $pagina = "notac_items"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $notac_items_id 		= mysql_real_escape_string($_REQUEST['notac_items_id']);   
     include "./notac_items/modelos/ver.php"; 
     include "./notac_items/reg/reg.php"; 
     include "./notac_items/vista/txt.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
