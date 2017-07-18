<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<form method="get" action="index.php" >
                <input type="hidden" name="p" value="balanza">
                <input type="hidden" name="c" value="buscar">       
                <tr> <td><input class="form-control" type="text" name="balanza_id_contacto" value="" placeholder="<?php _t("Id_contacto"); ?>"></td> 
 <td><input class="form-control" type="text" name="balanza_id_factura" value="" placeholder="<?php _t("Id_factura"); ?>"></td> 
 <td><input class="form-control" type="text" name="balanza_tipo" value="" placeholder="<?php _t("Tipo"); ?>"></td> 
 <td><input class="form-control" type="text" name="balanza_ref" value="" placeholder="<?php _t("Ref"); ?>"></td> 
 <td><input class="form-control" type="text" name="balanza_descripcion" value="" placeholder="<?php _t("Descripcion"); ?>"></td> 
 <td><input class="form-control" type="text" name="balanza_ce" value="" placeholder="<?php _t("Ce"); ?>"></td> 
 <td><input class="form-control" type="text" name="balanza_sub_total" value="" placeholder="<?php _t("Sub_total"); ?>"></td> 
 <td><input class="form-control" type="text" name="balanza_iva" value="" placeholder="<?php _t("Iva"); ?>"></td> 
 <td><input class="form-control" type="text" name="balanza_fecha" value="" placeholder="<?php _t("Fecha"); ?>"></td> 
 <td><input class="form-control" type="text" name="balanza_fecha_registro" value="" placeholder="<?php _t("Fecha_registro"); ?>"></td> 
 <td><input class="form-control" type="text" name="balanza_factura" value="" placeholder="<?php _t("Factura"); ?>"></td> 
 <td><input class="form-control" type="text" name="balanza_banco" value="" placeholder="<?php _t("Banco"); ?>"></td> 
 <td><input class="form-control" type="text" name="balanza_anulada" value="" placeholder="<?php _t("Anulada"); ?>"></td> 
 <td><input class="form-control" type="text" name="balanza_cod_anu" value="" placeholder="<?php _t("Cod_anu"); ?>"></td> 
<td><input class="btn btn-info" type="submit" value="<?php _t("Buscar"); ?>" >
        
        </td>        
    </tr>
</form> 