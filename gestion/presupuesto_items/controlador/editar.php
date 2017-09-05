 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "editar"; 
 $pagina = "presupuesto_items"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
 if(isset($_REQUEST['a'])=='editar'){ 
 $presupuesto_items_id = mysql_real_escape_string($_REQUEST['presupuesto_items_id']);      
 include "./presupuesto_items/reg/post.php";  
 include "./presupuesto_items/modelos/editar.php";  

 include "./presupuesto_items/modelos/ver.php";  
 include "./presupuesto_items/reg/reg.php"; 
 include "./presupuesto_items/vista/ver.php";  
 }else{ 
 $presupuesto_items_id = mysql_real_escape_string($_REQUEST['presupuesto_items_id']);      
 include "./presupuesto_items/modelos/ver.php"; 
 include "./presupuesto_items/reg/reg.php"; 
 include "./presupuesto_items/vista/editar.php"; 
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
                    "$presupuesto_items_id"=>"$presupuesto_items_id"        
                );
                echo "<table border>";
                echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                foreach ($variables as $key => $value) {
                    echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                }
                echo "</table>";
            }