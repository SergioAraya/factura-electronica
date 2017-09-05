<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $html = "
balanza_id : %balanza_id%
balanza_id_contacto : %balanza_id_contacto%
balanza_id_factura : %balanza_id_factura%
balanza_tipo : %balanza_tipo%
balanza_ref : %balanza_ref%
balanza_descripcion : %balanza_descripcion%
balanza_ce : %balanza_ce%
balanza_sub_total : %balanza_sub_total%
balanza_iva : %balanza_iva%
balanza_fecha : %balanza_fecha%
balanza_fecha_registro : %balanza_fecha_registro%
balanza_factura : %balanza_factura%
balanza_banco : %balanza_banco%
balanza_anulada : %balanza_anulada%
balanza_cod_anu : %balanza_cod_anu%
";

                include "./balanza/reg/var.php";

                echo "<h1>Variables disponibles</h1><pre>$html</pre>";
                ?>