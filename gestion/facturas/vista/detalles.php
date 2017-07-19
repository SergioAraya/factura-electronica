



<div class="row">
    <div class="col-lg-6"></div>
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="glyphicon glyphicon-user"></span>
                    <?php _t("Cliente"); echo ": $facturas_id_contacto"; ?></div>
            <div class="panel-body">
                <?php facturas_cliente_direccion_sobre($facturas_id_contacto); ?>               
            </div>
        </div>
    </div>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th><?php _t("Cantidad"); ?></th>
            <th><?php _t("Descripción"); ?></th>
            <th class="text-center"><?php _t("% iva"); ?></th>
            <th class="text-right"><?php _t("Precio U."); ?></th>
            <th class="text-right"><?php _t("Total"); ?></th>
        </tr>
    </thead>
    <tbody>


        <?php
        factura_items_detalles($facturas_ref);
        ?>


        <tr>
            <td></td>
            <td></td>
            <td><?php _t("Totales"); ?></td>
            <td class="text-right"><?php echo moneda(factura_items_totalghtva($facturas_ref)); ?></td>
            <td class="text-right"><?php echo moneda(factura_items_totalgtvac($facturas_ref)); ?></td>  
            
        </tr>
        

       
        

    <tr>
        <td class="text-right" colspan="4"><?php _t("Sub total"); ?></td>
        <td class="text-right"><?php echo moneda(factura_items_totalghtva($facturas_ref)); ?></td>  
        
    </tr>        

    <tr>
        <td class="text-right" colspan="4"><?php _t("Iva"); ?></td>
        <td class="text-right"><?php echo moneda(factura_items_totalgiva($facturas_ref)); ?></td>             
        
    </tr>        

    <tr>
        <td class="text-right" colspan="4"><?php _t("Anticipo"); ?></td>
        <td class="text-right"> -<?php echo moneda($facturas_anticipo); ?></td>           
        
    </tr>        

    <tr>
        <td class="text-right" colspan="4"><?php _t("Saldo"); ?></td>
        <td class="text-right"><?php echo moneda(factura_items_totalgtvac($facturas_ref) - $facturas_anticipo); ?></td>            
        
    </tr>        

    </tbody>
</table>


<div class="alert alert-info text-center" role="alert"><?php echo _t("Comunicación extructurada");
        echo " $facturas_ce";
        ?></div>
<div class="alert alert-warning" role="alert"><?php echo $facturas_comentarios; ?></div>