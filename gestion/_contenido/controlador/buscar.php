 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "buscar"; 
 $pagina = "_contenido"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
     $b = mysql_real_escape_string($_REQUEST['b']);
     include "./_contenido/modelos/buscar.php"; 
     
<<<<<<< HEAD
     include "./_contenido/vista/index.php"; 
=======
     include "./_contenido/vista/correccion.php"; 
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
 } else { 
     permisos_sin_permiso($accion,$pagina,$_usuarios_usuario); 
 } 
