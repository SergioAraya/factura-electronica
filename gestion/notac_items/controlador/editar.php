 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "editar"; 
 $pagina = "notac_items"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
 if(isset($_REQUEST['a'])=='editar'){ 
 $notac_items_id = mysql_real_escape_string($_REQUEST['notac_items_id']);      
 include "./notac_items/reg/post.php";  
 include "./notac_items/modelos/editar.php";  

 include "./notac_items/modelos/ver.php";  
 include "./notac_items/reg/reg.php"; 
 include "./notac_items/vista/ver.php";  
 }else{ 
 $notac_items_id = mysql_real_escape_string($_REQUEST['notac_items_id']);      
 include "./notac_items/modelos/ver.php"; 
 include "./notac_items/reg/reg.php"; 
 include "./notac_items/vista/editar.php"; 
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
                    "$notac_items_id"=>"$notac_items_id"        
                );
                echo "<table border>";
                echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                foreach ($variables as $key => $value) {
                    echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                }
                echo "</table>";
            }