<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $html = "
presupuestos_id : %presupuestos_id%
presupuestos_ref : %presupuestos_ref%
presupuestos_id_factura : %presupuestos_id_factura%
presupuestos_id_contacto : %presupuestos_id_contacto%
presupuestos_fecha_registro : %presupuestos_fecha_registro%
presupuestos_sub_total : %presupuestos_sub_total%
presupuestos_iva : %presupuestos_iva%
presupuestos_anticipo : %presupuestos_anticipo%
presupuestos_saldo : %presupuestos_saldo%
presupuestos_comentarios : %presupuestos_comentarios%
presupuestos_r1 : %presupuestos_r1%
presupuestos_r2 : %presupuestos_r2%
presupuestos_r3 : %presupuestos_r3%
presupuestos_fecha_cobro : %presupuestos_fecha_cobro%
presupuestos_expira : %presupuestos_expira%
presupuestos_ce : %presupuestos_ce%
presupuestos_estatus : %presupuestos_estatus%
";

                include "./presupuestos/reg/var.php";

                echo "<h1>Variables disponibles</h1><pre>$html</pre>";
                ?>