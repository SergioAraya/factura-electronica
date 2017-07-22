 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql=mysql_query( 
         "SELECT *  
 FROM plugins  
 WHERE  
 nombre like '%$plugins_nombre%'    
 AND  descripcion like '%$plugins_descripcion%'    
 AND  version like '%$plugins_version%'    
 AND  autor like '%$plugins_autor%'    
 AND  autor_email like '%$plugins_autor_email%'    
 AND  plugin_web like '%$plugins_plugin_web%'    
 AND  plugin_zip like '%$plugins_plugin_zip%'    
 AND  orden like '%$plugins_orden%'    
 AND  estatus like '%$plugins_estatus%'    
 ORDER BY id DESC    
 ",$conexion) or error(__DIR__, __FILE__, __LINE__);  
 $total_items = mysql_num_rows(mysql_query("$comando ", $conexion)); 


            if($config_debug){
                echo "<h3>Debug mode (".__FILE__." )</h3>";

                $variables = array(
                    "\$sql"=>"$sql"
                );

                echo "<table border>";
                echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";       
                foreach ($variables as $key => $value) {
                    echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                }    
                echo "</table>";

            }