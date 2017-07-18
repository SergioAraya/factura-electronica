 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql=mysql_query( 
         "SELECT *  
 FROM notac  
 WHERE  
 ref like '%$notac_ref%'    
 AND  id_factura like '%$notac_id_factura%'    
 AND  id_contacto like '%$notac_id_contacto%'    
 AND  fecha_registro like '%$notac_fecha_registro%'    
 AND  fecha_pago like '%$notac_fecha_pago%'    
 AND  sub_total like '%$notac_sub_total%'    
 AND  iva like '%$notac_iva%'    
 AND  comentarios like '%$notac_comentarios%'    
 AND  estatus like '%$notac_estatus%'    
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