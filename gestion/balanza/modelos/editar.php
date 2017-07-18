 <?php  
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql=mysql_query(" UPDATE balanza SET  
 id_contacto = '$balanza_id_contacto'  
 ,  id_factura = '$balanza_id_factura'  
 ,  tipo = '$balanza_tipo'  
 ,  ref = '$balanza_ref'  
 ,  descripcion = '$balanza_descripcion'  
 ,  ce = '$balanza_ce'  
 ,  sub_total = '$balanza_sub_total'  
 ,  iva = '$balanza_iva'  
 ,  fecha = '$balanza_fecha'  
 ,  factura = '$balanza_factura'  
 ,  banco = '$balanza_banco'  
 ,  anulada = '$balanza_anulada'  
 ,  cod_anu = '$balanza_cod_anu'  
 WHERE id = '$balanza_id' 
 ",$conexion) or error(__DIR__, __FILE__, __LINE__);   


            if($config_debug){
                echo "<h3>Debug mode (".__FILE__." )</h3>";

                $variables = array(
                    "\$sql"=>"$sql",
                    "\$balanza_id"=>"$balanza_id"
                );

                echo "<table border>";
                echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";       
                foreach ($variables as $key => $value) {
                    echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                }    
                echo "</table>";

            }