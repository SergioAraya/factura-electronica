 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql = "INSERT INTO paises ( 
 name 
 ,  continent 
 ,  Region 
 ,  SurfaceArea 
 ,  IndepYear 
 ,  Population 
 ,  LifeExpectancy 
 ,  GNP 
 ,  GNPOld 
 ,  LocalName 
 ,  GovernmentForm 
 ,  HeadOfState 
 ,  Capital 
 ,  code2 
 ,  prefijo_ruc 
 ) VALUES ( 
 :name 
 ,  :continent 
 ,  :Region 
 ,  :SurfaceArea 
 ,  :IndepYear 
 ,  :Population 
 ,  :LifeExpectancy 
 ,  :GNP 
 ,  :GNPOld 
 ,  :LocalName 
 ,  :GovernmentForm 
 ,  :HeadOfState 
 ,  :Capital 
 ,  :code2 
 ,  :prefijo_ruc 
   )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":name"=>"$paises_name" 
 ,  ":continent"=>"$paises_continent" 
 ,  ":Region"=>"$paises_Region" 
 ,  ":SurfaceArea"=>"$paises_SurfaceArea" 
 ,  ":IndepYear"=>"$paises_IndepYear" 
 ,  ":Population"=>"$paises_Population" 
 ,  ":LifeExpectancy"=>"$paises_LifeExpectancy" 
 ,  ":GNP"=>"$paises_GNP" 
 ,  ":GNPOld"=>"$paises_GNPOld" 
 ,  ":LocalName"=>"$paises_LocalName" 
 ,  ":GovernmentForm"=>"$paises_GovernmentForm" 
 ,  ":HeadOfState"=>"$paises_HeadOfState" 
 ,  ":Capital"=>"$paises_Capital" 
 ,  ":code2"=>"$paises_code2" 
 ,  ":prefijo_ruc"=>"$paises_prefijo_ruc" 
             ) 
 ); 


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