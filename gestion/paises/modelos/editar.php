 <?php  
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql=mysql_query(" UPDATE paises SET  
 name = '$paises_name'  
 ,  continent = '$paises_continent'  
 ,  Region = '$paises_Region'  
 ,  SurfaceArea = '$paises_SurfaceArea'  
 ,  IndepYear = '$paises_IndepYear'  
 ,  Population = '$paises_Population'  
 ,  LifeExpectancy = '$paises_LifeExpectancy'  
 ,  GNP = '$paises_GNP'  
 ,  GNPOld = '$paises_GNPOld'  
 ,  LocalName = '$paises_LocalName'  
 ,  GovernmentForm = '$paises_GovernmentForm'  
 ,  HeadOfState = '$paises_HeadOfState'  
 ,  Capital = '$paises_Capital'  
 ,  code2 = '$paises_code2'  
 ,  prefijo_ruc = '$paises_prefijo_ruc'  
 WHERE id = '$paises_id' 
 ",$conexion) or error(__DIR__, __FILE__, __LINE__);   


            if($config_debug){
                echo "<h3>Debug mode (".__FILE__." )</h3>";

                $variables = array(
                    "\$sql"=>"$sql",
                    "\$paises_id"=>"$paises_id"
                );

                echo "<table border>";
                echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";       
                foreach ($variables as $key => $value) {
                    echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                }    
                echo "</table>";

            }