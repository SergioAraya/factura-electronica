<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
  
  //$paises_Code = mysql_real_escape_string($_GET['paises_Code']); 
    $paises_name = (isset($_GET['paises_name']))?mysql_real_escape_string($_GET['paises_name']):null;   
    $paises_continent = (isset($_GET['paises_continent']))?mysql_real_escape_string($_GET['paises_continent']):Asia;   
    $paises_Region = (isset($_GET['paises_Region']))?mysql_real_escape_string($_GET['paises_Region']):null;   
    $paises_SurfaceArea = (isset($_GET['paises_SurfaceArea']))?mysql_real_escape_string($_GET['paises_SurfaceArea']):0.00;   
    $paises_IndepYear = (isset($_GET['paises_IndepYear']))?mysql_real_escape_string($_GET['paises_IndepYear']):null;   
    $paises_Population = (isset($_GET['paises_Population']))?mysql_real_escape_string($_GET['paises_Population']):null;   
    $paises_LifeExpectancy = (isset($_GET['paises_LifeExpectancy']))?mysql_real_escape_string($_GET['paises_LifeExpectancy']):null;   
    $paises_GNP = (isset($_GET['paises_GNP']))?mysql_real_escape_string($_GET['paises_GNP']):null;   
    $paises_GNPOld = (isset($_GET['paises_GNPOld']))?mysql_real_escape_string($_GET['paises_GNPOld']):null;   
    $paises_LocalName = (isset($_GET['paises_LocalName']))?mysql_real_escape_string($_GET['paises_LocalName']):null;   
    $paises_GovernmentForm = (isset($_GET['paises_GovernmentForm']))?mysql_real_escape_string($_GET['paises_GovernmentForm']):null;   
    $paises_HeadOfState = (isset($_GET['paises_HeadOfState']))?mysql_real_escape_string($_GET['paises_HeadOfState']):null;   
    $paises_Capital = (isset($_GET['paises_Capital']))?mysql_real_escape_string($_GET['paises_Capital']):null;   
    $paises_code2 = (isset($_GET['paises_code2']))?mysql_real_escape_string($_GET['paises_code2']):null;   
    $paises_prefijo_ruc = (isset($_GET['paises_prefijo_ruc']))?mysql_real_escape_string($_GET['paises_prefijo_ruc']):null;   

                if ($config_debug) {
                    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";    
                    echo "<table border>";
                    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                    foreach ($_GET as $key => $value) {
                        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                    }
                    echo "</table>";
                }