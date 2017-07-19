<form action="index.php" method="get">
    <input type="hidden" name="p" value="facturas">
    <input type="hidden" name="c" value="ver">
    <input type="hidden" name="a" value="ver">
    <input type="hidden" name="facturas_id" value="<?php echo $facturas_id; ?>">

    <button type="submit" class="btn btn-danger"><?php _t("Registrar"); ?></button>
</form>

<div class="row">
    <div class="col-lg-6"></div>
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading"><?php
                _t("Cliente");
                echo ": $facturas_id_contacto";
                ?>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#cambiar_cliente">
<?php _t("Cambiar Cliente"); ?>
                </button>

            </div>
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
            <th><?php _t("% iva"); ?></th>
            <th><?php _t("Precio U."); ?></th>
            <th><?php _t("Total"); ?></th>
            <th><?php _t("Acción"); ?></th>
        </tr>
    </thead>
    <tbody>



        <?php
        factura_items_editar($facturas_ref);
        ?>



    <form method="post" action="index.php">
        <input type="hidden" name="p" value="factura_items">
        <input type="hidden" name="c" value="crear">
        <input type="hidden" name="a" value="crear">s      
        <input type="hidden" name="factura_items_ref_factura" value="<?php echo $facturas_ref; ?>"> 
        <input type="hidden" name="facturas_id" value="<?php echo $facturas_id; ?>"> 
        <tr>
            <td><input class="form-control" type="" name="factura_items_cantidad" size="3"></td>
            <td><input class="form-control" type="" name="factura_items_descripcion" size="3"></td>
            <td>
                <select class="form-control" name="factura_items_porcentaje_iva">
                    <option value="10"> 10%</option>
                    <option value="20"> 20%</option>

                </select>
            </td>
            <td><input class="form-control" type="" name="factura_items_valor" size="3"></td>
            <td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>"></td>
            <td></td>
        </tr>
    </form>  



    <tr>
        <td class="text-right" colspan="4"><?php _t("Sub total"); ?></td>
        <td class="text-right">1200.20</td>  
        <td></td>
    </tr>        

    <tr>
        <td class="text-right" colspan="4"><?php _t("Iva"); ?></td>
        <td class="text-right">1200.20</td>            
        <td></td>
    </tr>        

    <tr>
        <td class="text-right" colspan="4"><?php _t("Adelanto"); ?></td>
        <td class="text-right">1200.20</td>            
        <td></td>
    </tr>        

    <tr>
        <td class="text-right" colspan="4"><?php _t("Saldo"); ?></td>
        <td class="text-right">1200.20</td>            
        <td></td>
    </tr>        

</tbody>
</table>


<?php
if ($facturas_comentarios) {
    mensaje('', $facturas_comentarios);
}
?>







<form action="index.php" method="post" class="form-inline">
    <input type="hidden" name="p" value="facturas">
    <input type="hidden" name="c" value="editar_comentarios">
    <input type="hidden" name="a" value="editar">
    <input type="hidden" name="facturas_id" value="<?php echo $facturas_id; ?>">    
    <input type="hidden" name="facturas_ref" value="<?php echo $facturas_ref; ?>">    

    <div class="form-group">
        <label class="sr-only" for="facturas_comentarios"><?php _t("Comentarios"); ?></label>
        <input 
            type="text" 
            name="facturas_comentarios" 
            class="form-control" 
            id="facturas_comentarios" 
            placeholder="<?php _t("Comentarios publicos"); ?>"
            value="<?php echo $facturas_comentarios; ?>"
            >
    </div>

    <button type="submit" class="btn btn-default"><?php _t("Registar"); ?></button>
</form>


<hr>





<!-- Modal -->
<div class="modal fade" id="cambiar_cliente" tabindex="-1" role="dialog" aria-labelledby="cambiar_cliente">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><?php _t("Cambiar Cliente"); ?></h4>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>