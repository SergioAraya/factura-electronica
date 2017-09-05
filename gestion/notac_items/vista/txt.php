<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $html = "
notac_items_id : %notac_items_id%
notac_items_ref_notac : %notac_items_ref_notac%
notac_items_cantidad : %notac_items_cantidad%
notac_items_descripcion : %notac_items_descripcion%
notac_items_valor : %notac_items_valor%
notac_items_porcentaje_iva : %notac_items_porcentaje_iva%
";

                include "./notac_items/reg/var.php";

                echo "<h1>Variables disponibles</h1><pre>$html</pre>";
                ?>