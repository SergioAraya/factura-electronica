 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "ver"; 
 $pagina = "_grupos"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
  $inicia = (isset($_REQUEST['pag']) && $_REQUEST['pag'] != 0 ) ? $_REQUEST['pag'] * $cfg_limite_items_en_tablas : 0;    
     include "./_grupos/modelos/index.php"; 
     $archivo_tema = "../temas/". _opciones_valor_segun_opcion('tema')."/_grupos/index.php";
     if(file_exists($archivo_tema)){
         include "$archivo_tema"; 
     }else{
         include "./_grupos/vista/index.php"; 
     }
     logs_historico($p,$c,false);
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
