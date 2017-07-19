<?php 
 /**  
 magia_version: 0.0.11 
 **/
  
  //$paises_Code = mysql_real_escape_string($_POST['paises_Code']); 
    $paises_name = (isset($_POST['paises_name']))?mysql_real_escape_string($_POST['paises_name']):null;   
    $paises_continent = (isset($_POST['paises_continent']))?mysql_real_escape_string($_POST['paises_continent']):Asia;   
    $paises_Region = (isset($_POST['paises_Region']))?mysql_real_escape_string($_POST['paises_Region']):null;   
    $paises_SurfaceArea = (isset($_POST['paises_SurfaceArea']))?mysql_real_escape_string($_POST['paises_SurfaceArea']):0.00;   
    $paises_IndepYear = (isset($_POST['paises_IndepYear']))?mysql_real_escape_string($_POST['paises_IndepYear']):null;   
    $paises_Population = (isset($_POST['paises_Population']))?mysql_real_escape_string($_POST['paises_Population']):null;   
    $paises_LifeExpectancy = (isset($_POST['paises_LifeExpectancy']))?mysql_real_escape_string($_POST['paises_LifeExpectancy']):null;   
    $paises_GNP = (isset($_POST['paises_GNP']))?mysql_real_escape_string($_POST['paises_GNP']):null;   
    $paises_GNPOld = (isset($_POST['paises_GNPOld']))?mysql_real_escape_string($_POST['paises_GNPOld']):null;   
    $paises_LocalName = (isset($_POST['paises_LocalName']))?mysql_real_escape_string($_POST['paises_LocalName']):null;   
    $paises_GovernmentForm = (isset($_POST['paises_GovernmentForm']))?mysql_real_escape_string($_POST['paises_GovernmentForm']):null;   
    $paises_HeadOfState = (isset($_POST['paises_HeadOfState']))?mysql_real_escape_string($_POST['paises_HeadOfState']):null;   
    $paises_Capital = (isset($_POST['paises_Capital']))?mysql_real_escape_string($_POST['paises_Capital']):null;   
    $paises_code2 = (isset($_POST['paises_code2']))?mysql_real_escape_string($_POST['paises_code2']):null;   
    $paises_prefijo_ruc = (isset($_POST['paises_prefijo_ruc']))?mysql_real_escape_string($_POST['paises_prefijo_ruc']):null;   

                if ($config_debug) {
                    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";    
                    echo "<table border>";
                    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                    foreach ($_POST as $key => $value) {
                        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                    }
                    echo "</table>";
                }