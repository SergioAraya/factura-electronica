 <?php  
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql=mysql_query(" UPDATE plugins SET  
 nombre = '$plugins_nombre'  
 ,  descripcion = '$plugins_descripcion'  
 ,  version = '$plugins_version'  
 ,  autor = '$plugins_autor'  
 ,  autor_email = '$plugins_autor_email'  
 ,  plugin_web = '$plugins_plugin_web'  
 ,  plugin_zip = '$plugins_plugin_zip'  
 ,  orden = '$plugins_orden'  
 ,  estatus = '$plugins_estatus'  
 WHERE id = '$plugins_id' 
 ",$conexion) or error(__DIR__, __FILE__, __LINE__);   


            if($config_debug){
                echo "<h3>Debug mode (".__FILE__." )</h3>";

                $variables = array(
                    "\$sql"=>"$sql",
                    "\$plugins_id"=>"$plugins_id"
                );

                echo "<table border>";
                echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";       
                foreach ($variables as $key => $value) {
                    echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                }    
                echo "</table>";

            }