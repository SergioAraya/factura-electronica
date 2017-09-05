 <?php  
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql=mysql_query(" UPDATE factura_items SET  
 ref_factura = '$factura_items_ref_factura'  
 ,  cantidad = '$factura_items_cantidad'  
 ,  descripcion = '$factura_items_descripcion'  
 ,  valor = '$factura_items_valor'  
 ,  porcentaje_iva = '$factura_items_porcentaje_iva'  
 WHERE id = '$factura_items_id' 
 ",$conexion) or error(__DIR__, __FILE__, __LINE__);   


            if($config_debug){
                echo "<h3>Debug mode (".__FILE__." )</h3>";

                $variables = array(
                    "\$sql"=>"$sql",
                    "\$factura_items_id"=>"$factura_items_id"
                );

                echo "<table border>";
                echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";       
                foreach ($variables as $key => $value) {
                    echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                }    
                echo "</table>";

            }