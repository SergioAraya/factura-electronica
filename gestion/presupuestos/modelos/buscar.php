 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql=mysql_query( 
         "SELECT *  
 FROM presupuestos  
 WHERE  
 ref like '%$presupuestos_ref%'    
 AND  id_factura like '%$presupuestos_id_factura%'    
 AND  id_contacto like '%$presupuestos_id_contacto%'    
 AND  fecha_registro like '%$presupuestos_fecha_registro%'    
 AND  sub_total like '%$presupuestos_sub_total%'    
 AND  iva like '%$presupuestos_iva%'    
 AND  anticipo like '%$presupuestos_anticipo%'    
 AND  saldo like '%$presupuestos_saldo%'    
 AND  comentarios like '%$presupuestos_comentarios%'    
 AND  r1 like '%$presupuestos_r1%'    
 AND  r2 like '%$presupuestos_r2%'    
 AND  r3 like '%$presupuestos_r3%'    
 AND  fecha_cobro like '%$presupuestos_fecha_cobro%'    
 AND  expira like '%$presupuestos_expira%'    
 AND  ce like '%$presupuestos_ce%'    
 AND  estatus like '%$presupuestos_estatus%'    
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