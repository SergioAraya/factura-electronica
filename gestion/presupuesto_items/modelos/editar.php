 <?php  
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql=mysql_query(" UPDATE presupuesto_items SET  
 ref_presupuesto = '$presupuesto_items_ref_presupuesto'  
 ,  cantidad = '$presupuesto_items_cantidad'  
 ,  descripcion = '$presupuesto_items_descripcion'  
 ,  valor = '$presupuesto_items_valor'  
 ,  porcentaje_iva = '$presupuesto_items_porcentaje_iva'  
 WHERE id = '$presupuesto_items_id' 
 ",$conexion) or error(__DIR__, __FILE__, __LINE__);   


            if($config_debug){
                echo "<h3>Debug mode (".__FILE__." )</h3>";

                $variables = array(
                    "\$sql"=>"$sql",
                    "\$presupuesto_items_id"=>"$presupuesto_items_id"
                );

                echo "<table border>";
                echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";       
                foreach ($variables as $key => $value) {
                    echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                }    
                echo "</table>";

            }