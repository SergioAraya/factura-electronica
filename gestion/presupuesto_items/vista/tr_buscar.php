<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<form method="get" action="index.php" >
                <input type="hidden" name="p" value="presupuesto_items">
                <input type="hidden" name="c" value="buscar">       
                <tr> <td><input class="form-control" type="text" name="presupuesto_items_ref_presupuesto" value="" placeholder="<?php _t("Ref_presupuesto"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuesto_items_cantidad" value="" placeholder="<?php _t("Cantidad"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuesto_items_descripcion" value="" placeholder="<?php _t("Descripcion"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuesto_items_valor" value="" placeholder="<?php _t("Valor"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuesto_items_porcentaje_iva" value="" placeholder="<?php _t("Porcentaje_iva"); ?>"></td> 
<td><input class="btn btn-info" type="submit" value="<?php _t("Buscar"); ?>" >
        
        </td>        
    </tr>
</form> 