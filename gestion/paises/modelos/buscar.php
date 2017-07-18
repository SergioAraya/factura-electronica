 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql=mysql_query( 
         "SELECT *  
 FROM paises  
 WHERE  
 name like '%$paises_name%'    
 AND  continent like '%$paises_continent%'    
 AND  Region like '%$paises_Region%'    
 AND  SurfaceArea like '%$paises_SurfaceArea%'    
 AND  IndepYear like '%$paises_IndepYear%'    
 AND  Population like '%$paises_Population%'    
 AND  LifeExpectancy like '%$paises_LifeExpectancy%'    
 AND  GNP like '%$paises_GNP%'    
 AND  GNPOld like '%$paises_GNPOld%'    
 AND  LocalName like '%$paises_LocalName%'    
 AND  GovernmentForm like '%$paises_GovernmentForm%'    
 AND  HeadOfState like '%$paises_HeadOfState%'    
 AND  Capital like '%$paises_Capital%'    
 AND  code2 like '%$paises_code2%'    
 AND  prefijo_ruc like '%$paises_prefijo_ruc%'    
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