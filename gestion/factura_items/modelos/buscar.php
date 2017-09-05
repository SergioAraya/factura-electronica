 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql=mysql_query( 
         "SELECT *  
 FROM factura_items  
 WHERE  
 ref_factura like '%$factura_items_ref_factura%'    
 AND  cantidad like '%$factura_items_cantidad%'    
 AND  descripcion like '%$factura_items_descripcion%'    
 AND  valor like '%$factura_items_valor%'    
 AND  porcentaje_iva like '%$factura_items_porcentaje_iva%'    
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