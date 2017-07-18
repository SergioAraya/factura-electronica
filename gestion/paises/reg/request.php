<?php 
 /**  
 magia_version: 0.0.11 
 **/
  
    $paises_Code = (isset($_REQUEST['paises_Code']))?mysql_real_escape_string($_REQUEST['paises_Code']):null;   
    $paises_name = (isset($_REQUEST['paises_name']))?mysql_real_escape_string($_REQUEST['paises_name']):null;   
    $paises_continent = (isset($_REQUEST['paises_continent']))?mysql_real_escape_string($_REQUEST['paises_continent']):Asia;   
    $paises_Region = (isset($_REQUEST['paises_Region']))?mysql_real_escape_string($_REQUEST['paises_Region']):null;   
    $paises_SurfaceArea = (isset($_REQUEST['paises_SurfaceArea']))?mysql_real_escape_string($_REQUEST['paises_SurfaceArea']):0.00;   
    $paises_IndepYear = (isset($_REQUEST['paises_IndepYear']))?mysql_real_escape_string($_REQUEST['paises_IndepYear']):null;   
    $paises_Population = (isset($_REQUEST['paises_Population']))?mysql_real_escape_string($_REQUEST['paises_Population']):null;   
    $paises_LifeExpectancy = (isset($_REQUEST['paises_LifeExpectancy']))?mysql_real_escape_string($_REQUEST['paises_LifeExpectancy']):null;   
    $paises_GNP = (isset($_REQUEST['paises_GNP']))?mysql_real_escape_string($_REQUEST['paises_GNP']):null;   
    $paises_GNPOld = (isset($_REQUEST['paises_GNPOld']))?mysql_real_escape_string($_REQUEST['paises_GNPOld']):null;   
    $paises_LocalName = (isset($_REQUEST['paises_LocalName']))?mysql_real_escape_string($_REQUEST['paises_LocalName']):null;   
    $paises_GovernmentForm = (isset($_REQUEST['paises_GovernmentForm']))?mysql_real_escape_string($_REQUEST['paises_GovernmentForm']):null;   
    $paises_HeadOfState = (isset($_REQUEST['paises_HeadOfState']))?mysql_real_escape_string($_REQUEST['paises_HeadOfState']):null;   
    $paises_Capital = (isset($_REQUEST['paises_Capital']))?mysql_real_escape_string($_REQUEST['paises_Capital']):null;   
    $paises_code2 = (isset($_REQUEST['paises_code2']))?mysql_real_escape_string($_REQUEST['paises_code2']):null;   
    $paises_prefijo_ruc = (isset($_REQUEST['paises_prefijo_ruc']))?mysql_real_escape_string($_REQUEST['paises_prefijo_ruc']):null;   

                if ($config_debug) {
                    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";    
                    echo "<table border>";
                    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                    foreach ($_REQUEST as $key => $value) {
                        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                    }
                    echo "</table>";
                }