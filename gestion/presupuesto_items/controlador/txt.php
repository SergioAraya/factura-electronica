 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "ver"; 
 $pagina = "presupuesto_items"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $presupuesto_items_id 		= mysql_real_escape_string($_REQUEST['presupuesto_items_id']);   
     include "./presupuesto_items/modelos/ver.php"; 
     include "./presupuesto_items/reg/reg.php"; 
     include "./presupuesto_items/vista/txt.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
