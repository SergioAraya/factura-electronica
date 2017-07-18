<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $html = "
paises_Code : %paises_Code%
paises_name : %paises_name%
paises_continent : %paises_continent%
paises_Region : %paises_Region%
paises_SurfaceArea : %paises_SurfaceArea%
paises_IndepYear : %paises_IndepYear%
paises_Population : %paises_Population%
paises_LifeExpectancy : %paises_LifeExpectancy%
paises_GNP : %paises_GNP%
paises_GNPOld : %paises_GNPOld%
paises_LocalName : %paises_LocalName%
paises_GovernmentForm : %paises_GovernmentForm%
paises_HeadOfState : %paises_HeadOfState%
paises_Capital : %paises_Capital%
paises_code2 : %paises_code2%
paises_prefijo_ruc : %paises_prefijo_ruc%
";

                include "./paises/reg/var.php";

                echo "<h1>Variables disponibles</h1><pre>$html</pre>";
                ?>