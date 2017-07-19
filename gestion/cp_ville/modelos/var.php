 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
$sql=mysql_query( 
 "SELECT * FROM cp_ville WHERE id = '$cp_ville_id' ORDER BY id DESC   ",$conexion) 	  
or error(__DIR__, __FILE__, __LINE__);	  
 $cp_ville = mysql_fetch_array($sql);	  


            if($config_debug){
                echo "<h3>Debug mode (".__FILE__." )</h3>";

                $variables = array(
                    "\$sql"=>"$sql",
                    "\$cp_ville_id"=>"$cp_ville_id"
                    
                    
                );

                echo "<table border>";
                echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";       
                foreach ($variables as $key => $value) {
                    echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                }    
                echo "</table>";

            }