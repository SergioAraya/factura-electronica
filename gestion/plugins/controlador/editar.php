 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "editar"; 
 $pagina = "plugins"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
 if(isset($_REQUEST['a'])=='editar'){ 
 $plugins_id = mysql_real_escape_string($_REQUEST['plugins_id']);      
 include "./plugins/reg/post.php";  
 include "./plugins/modelos/editar.php";  

 include "./plugins/modelos/ver.php";  
 include "./plugins/reg/reg.php"; 
 include "./plugins/vista/ver.php";  
 }else{ 
 $plugins_id = mysql_real_escape_string($_REQUEST['plugins_id']);      
 include "./plugins/modelos/ver.php"; 
 include "./plugins/reg/reg.php"; 
 include "./plugins/vista/editar.php"; 
 }  
 } else { 
 permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 

            if($config_debug){
                echo "<h3>Debug mode (".__FILE__." )</h3>";

                $variables = array(
                    "\$accion"=>"$accion",
                    "\$pagina"=>"$pagina",
                    "\$_usuarios_grupo"=>"$_usuarios_grupo",
                    "permisos_tiene_permiso(\$accion, \$pagina, \$_usuarios_grupo)"=>permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo),
                    "\$_REQUEST['a']"=>"$_REQUEST[a]",
                    "\$_REQUEST['a']"=>"$_REQUEST[a]",       
                    "$plugins_id"=>"$plugins_id"        
                );
                echo "<table border>";
                echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                foreach ($variables as $key => $value) {
                    echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                }
                echo "</table>";
            }