 <?php  
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql=mysql_query(" UPDATE notac SET  
 ref = '$notac_ref'  
 ,  id_factura = '$notac_id_factura'  
 ,  id_contacto = '$notac_id_contacto'  
 ,  fecha_pago = '$notac_fecha_pago'  
 ,  sub_total = '$notac_sub_total'  
 ,  iva = '$notac_iva'  
 ,  comentarios = '$notac_comentarios'  
 ,  estatus = '$notac_estatus'  
 WHERE id = '$notac_id' 
 ",$conexion) or error(__DIR__, __FILE__, __LINE__);   


            if($config_debug){
                echo "<h3>Debug mode (".__FILE__." )</h3>";

                $variables = array(
                    "\$sql"=>"$sql",
                    "\$notac_id"=>"$notac_id"
                );

                echo "<table border>";
                echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";       
                foreach ($variables as $key => $value) {
                    echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                }    
                echo "</table>";

            }