 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql=mysql_query( 
         "SELECT *  
 FROM presupuesto_items  
 WHERE  
 ref_presupuesto like '%$presupuesto_items_ref_presupuesto%'    
 AND  cantidad like '%$presupuesto_items_cantidad%'    
 AND  descripcion like '%$presupuesto_items_descripcion%'    
 AND  valor like '%$presupuesto_items_valor%'    
 AND  porcentaje_iva like '%$presupuesto_items_porcentaje_iva%'    
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