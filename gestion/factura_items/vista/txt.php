<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $html = "
factura_items_id : %factura_items_id%
factura_items_ref_factura : %factura_items_ref_factura%
factura_items_cantidad : %factura_items_cantidad%
factura_items_descripcion : %factura_items_descripcion%
factura_items_valor : %factura_items_valor%
factura_items_porcentaje_iva : %factura_items_porcentaje_iva%
";

                include "./factura_items/reg/var.php";

                echo "<h1>Variables disponibles</h1><pre>$html</pre>";
                ?>