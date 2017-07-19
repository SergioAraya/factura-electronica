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



<form action="index.php" method="post">
    <input type="hidden" name="p" value="facturas">
    <input type="hidden" name="c" value="editar_comentarios">
    <input type="hidden" name="a" value="editar">
    <input type="hidden" name="facturas_id" value="<?php echo $facturas_id; ?>">    
    <input type="hidden" name="facturas_ref" value="<?php echo $facturas_ref; ?>">    

    <div class="form-group">
        <label for="facturas_comentarios"><?php _t("Comentarios"); ?></label>
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