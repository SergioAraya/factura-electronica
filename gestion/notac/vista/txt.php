<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $html = "
notac_id : %notac_id%
notac_ref : %notac_ref%
notac_id_factura : %notac_id_factura%
notac_id_contacto : %notac_id_contacto%
notac_fecha_registro : %notac_fecha_registro%
notac_fecha_pago : %notac_fecha_pago%
notac_sub_total : %notac_sub_total%
notac_iva : %notac_iva%
notac_comentarios : %notac_comentarios%
notac_estatus : %notac_estatus%
";

                include "./notac/reg/var.php";

                echo "<h1>Variables disponibles</h1><pre>$html</pre>";
                ?>