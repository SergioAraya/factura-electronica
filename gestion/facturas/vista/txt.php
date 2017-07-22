<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $html = "
facturas_id : %facturas_id%
facturas_ref : %facturas_ref%
facturas_id_presupuesto : %facturas_id_presupuesto%
facturas_id_notac : %facturas_id_notac%
facturas_id_contacto : %facturas_id_contacto%
facturas_fecha_registro : %facturas_fecha_registro%
facturas_sub_total : %facturas_sub_total%
facturas_iva : %facturas_iva%
facturas_anticipo : %facturas_anticipo%
facturas_saldo : %facturas_saldo%
facturas_comentarios : %facturas_comentarios%
facturas_r1 : %facturas_r1%
facturas_r2 : %facturas_r2%
facturas_r3 : %facturas_r3%
facturas_fecha_cobro : %facturas_fecha_cobro%
facturas_expira : %facturas_expira%
facturas_ce : %facturas_ce%
facturas_estatus : %facturas_estatus%
";

                include "./facturas/reg/var.php";

                echo "<h1>Variables disponibles</h1><pre>$html</pre>";
                ?>