 <?php  
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql=mysql_query(" UPDATE bancos SET  
 banco = '$bancos_banco'  
 ,  cuenta = '$bancos_cuenta'  
 ,  iban = '$bancos_iban'  
 ,  orden = '$bancos_orden'  
 ,  estatus = '$bancos_estatus'  
 WHERE id = '$bancos_id' 
 ",$conexion) or error(__DIR__, __FILE__, __LINE__);   


            if($config_debug){
                echo "<h3>Debug mode (".__FILE__." )</h3>";

                $variables = array(
                    "\$sql"=>"$sql",
                    "\$bancos_id"=>"$bancos_id"
                );

                echo "<table border>";
                echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";       
                foreach ($variables as $key => $value) {
                    echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                }    
                echo "</table>";

            }