 <?php  
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql=mysql_query(" UPDATE notac_items SET  
 ref_notac = '$notac_items_ref_notac'  
 ,  cantidad = '$notac_items_cantidad'  
 ,  descripcion = '$notac_items_descripcion'  
 ,  valor = '$notac_items_valor'  
 ,  porcentaje_iva = '$notac_items_porcentaje_iva'  
 WHERE id = '$notac_items_id' 
 ",$conexion) or error(__DIR__, __FILE__, __LINE__);   


            if($config_debug){
                echo "<h3>Debug mode (".__FILE__." )</h3>";

                $variables = array(
                    "\$sql"=>"$sql",
                    "\$notac_items_id"=>"$notac_items_id"
                );

                echo "<table border>";
                echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";       
                foreach ($variables as $key => $value) {
                    echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                }    
                echo "</table>";

            }