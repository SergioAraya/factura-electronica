<table class="table table-striped">
    <thead>
        <tr>
            <th><?php _t("Cantidad"); ?></th>
            <th><?php _t("Descripción"); ?></th>
            <th><?php _t("% iva"); ?></th>
            <th><?php _t("Precio U."); ?></th>
            <th><?php _t("Total"); ?></th>
        </tr>
    </thead>
    <tbody>

        
<?php 
factura_items_detalles($facturas_ref);
?>
                
      
        
        
        <tr>
            <td class="text-right" colspan="4"><?php _t("Sub total"); ?></td>
            <td class="text-right">1200.20</td>            
        </tr>        
        
        <tr>
            <td class="text-right" colspan="4"><?php _t("Iva"); ?></td>
            <td class="text-right">1200.20</td>            
        </tr>        
        
        <tr>
            <td class="text-right" colspan="4"><?php _t("Adelanto"); ?></td>
            <td class="text-right">1200.20</td>            
        </tr>        
        
        <tr>
            <td class="text-right" colspan="4"><?php _t("Saldo"); ?></td>
            <td class="text-right">1200.20</td>            
        </tr>        
        
    </tbody>
</table>


<div class="alert alert-info text-center" role="alert"><?php echo _t("Comunicación extructurada"); echo " $facturas_ce"; ?></div>
<div class="alert alert-warning" role="alert"><?php echo $facturas_comentarios; ?></div>