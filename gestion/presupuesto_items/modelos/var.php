 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
$sql=mysql_query( 
 "SELECT * FROM presupuesto_items WHERE id = '$presupuesto_items_id' ORDER BY id DESC   ",$conexion) 	  
or error(__DIR__, __FILE__, __LINE__);	  
 $presupuesto_items = mysql_fetch_array($sql);	  


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