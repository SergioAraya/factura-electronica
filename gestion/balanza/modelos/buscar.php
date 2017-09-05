 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql=mysql_query( 
         "SELECT *  
 FROM balanza  
 WHERE  
 id_contacto like '%$balanza_id_contacto%'    
 AND  id_factura like '%$balanza_id_factura%'    
 AND  tipo like '%$balanza_tipo%'    
 AND  ref like '%$balanza_ref%'    
 AND  descripcion like '%$balanza_descripcion%'    
 AND  ce like '%$balanza_ce%'    
 AND  sub_total like '%$balanza_sub_total%'    
 AND  iva like '%$balanza_iva%'    
 AND  fecha like '%$balanza_fecha%'    
 AND  fecha_registro like '%$balanza_fecha_registro%'    
 AND  factura like '%$balanza_factura%'    
 AND  banco like '%$balanza_banco%'    
 AND  anulada like '%$balanza_anulada%'    
 AND  cod_anu like '%$balanza_cod_anu%'    
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