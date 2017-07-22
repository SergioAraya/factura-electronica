 <?php  
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql=mysql_query(" UPDATE facturas SET  
 ref = '$facturas_ref'  
 ,  id_presupuesto = '$facturas_id_presupuesto'  
 ,  id_notac = '$facturas_id_notac'  
 ,  id_contacto = '$facturas_id_contacto'  
 ,  sub_total = '$facturas_sub_total'  
 ,  iva = '$facturas_iva'  
 ,  anticipo = '$facturas_anticipo'  
 ,  saldo = '$facturas_saldo'  
 ,  comentarios = '$facturas_comentarios'  
 ,  r1 = '$facturas_r1'  
 ,  r2 = '$facturas_r2'  
 ,  r3 = '$facturas_r3'  
 ,  fecha_cobro = '$facturas_fecha_cobro'  
 ,  expira = '$facturas_expira'  
 ,  ce = '$facturas_ce'  
 ,  estatus = '$facturas_estatus'  
 WHERE id = '$facturas_id' 
 ",$conexion) or error(__DIR__, __FILE__, __LINE__);   


            if($config_debug){
                echo "<h3>Debug mode (".__FILE__." )</h3>";

                $variables = array(
                    "\$sql"=>"$sql",
                    "\$facturas_id"=>"$facturas_id"
                );

                echo "<table border>";
                echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";       
                foreach ($variables as $key => $value) {
                    echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                }    
                echo "</table>";

            }