<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $html = "
presupuesto_items_id : %presupuesto_items_id%
presupuesto_items_ref_presupuesto : %presupuesto_items_ref_presupuesto%
presupuesto_items_cantidad : %presupuesto_items_cantidad%
presupuesto_items_descripcion : %presupuesto_items_descripcion%
presupuesto_items_valor : %presupuesto_items_valor%
presupuesto_items_porcentaje_iva : %presupuesto_items_porcentaje_iva%
";

                include "./presupuesto_items/reg/var.php";

                echo "<h1>Variables disponibles</h1><pre>$html</pre>";
                ?>