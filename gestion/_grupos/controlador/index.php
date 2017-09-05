 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "ver"; 
 $pagina = "_grupos"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
  $inicia = (isset($_REQUEST['pag']) && $_REQUEST['pag'] != 0 ) ? $_REQUEST['pag'] * $cfg_limite_items_en_tablas : 0;    
     include "./_grupos/modelos/index.php"; 
<<<<<<< HEAD
     $archivo_tema = "../temas/". _opciones_valor_segun_opcion('tema')."/_grupos/index.php";
     if(file_exists($archivo_tema)){
         include "$archivo_tema"; 
     }else{
         include "./_grupos/vista/index.php"; 
     }
=======
     include "./_grupos/vista/index.php"; 
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
     logs_historico($p,$c,false);
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
