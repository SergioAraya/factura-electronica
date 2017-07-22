<table class="table table-striped">
    <thead>
        <tr>
            <th><?php _t("#"); ?></th>            
            <th><?php _t("Fecha"); ?></th>
            <th><?php _t("Valor"); ?></th>            
        </tr>
    </thead>
    <tbody>

        
<?php 
balanza_registro_pagos_segun_factura($facturas_id);
?>        
       
        



        <tr>
            <td class="text-right" colspan="2"><?php _t("Total"); ?></td>
            <td class="text-right">1200.20</td>            
        </tr>        

    </tbody>
</table>