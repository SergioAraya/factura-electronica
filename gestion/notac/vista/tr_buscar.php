<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<form method="get" action="index.php" >
                <input type="hidden" name="p" value="notac">
                <input type="hidden" name="c" value="buscar">       
                <tr> <td><input class="form-control" type="text" name="notac_ref" value="" placeholder="<?php _t("Ref"); ?>"></td> 
 <td><input class="form-control" type="text" name="notac_id_factura" value="" placeholder="<?php _t("Id_factura"); ?>"></td> 
 <td><input class="form-control" type="text" name="notac_id_contacto" value="" placeholder="<?php _t("Id_contacto"); ?>"></td> 
 <td><input class="form-control" type="text" name="notac_fecha_registro" value="" placeholder="<?php _t("Fecha_registro"); ?>"></td> 
 <td><input class="form-control" type="text" name="notac_fecha_pago" value="" placeholder="<?php _t("Fecha_pago"); ?>"></td> 
 <td><input class="form-control" type="text" name="notac_sub_total" value="" placeholder="<?php _t("Sub_total"); ?>"></td> 
 <td><input class="form-control" type="text" name="notac_iva" value="" placeholder="<?php _t("Iva"); ?>"></td> 
 <td><input class="form-control" type="text" name="notac_comentarios" value="" placeholder="<?php _t("Comentarios"); ?>"></td> 
 <td><input class="form-control" type="text" name="notac_estatus" value="" placeholder="<?php _t("Estatus"); ?>"></td> 
<td><input class="btn btn-info" type="submit" value="<?php _t("Buscar"); ?>" >
        
        </td>        
    </tr>
</form> 