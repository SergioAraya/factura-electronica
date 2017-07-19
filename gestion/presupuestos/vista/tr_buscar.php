<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<form method="get" action="index.php" >
                <input type="hidden" name="p" value="presupuestos">
                <input type="hidden" name="c" value="buscar">       
                <tr> <td><input class="form-control" type="text" name="presupuestos_ref" value="" placeholder="<?php _t("Ref"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuestos_id_factura" value="" placeholder="<?php _t("Id_factura"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuestos_id_contacto" value="" placeholder="<?php _t("Id_contacto"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuestos_fecha_registro" value="" placeholder="<?php _t("Fecha_registro"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuestos_sub_total" value="" placeholder="<?php _t("Sub_total"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuestos_iva" value="" placeholder="<?php _t("Iva"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuestos_anticipo" value="" placeholder="<?php _t("Anticipo"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuestos_saldo" value="" placeholder="<?php _t("Saldo"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuestos_comentarios" value="" placeholder="<?php _t("Comentarios"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuestos_r1" value="" placeholder="<?php _t("R1"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuestos_r2" value="" placeholder="<?php _t("R2"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuestos_r3" value="" placeholder="<?php _t("R3"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuestos_fecha_cobro" value="" placeholder="<?php _t("Fecha_cobro"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuestos_expira" value="" placeholder="<?php _t("Expira"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuestos_ce" value="" placeholder="<?php _t("Ce"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuestos_estatus" value="" placeholder="<?php _t("Estatus"); ?>"></td> 
<td><input class="btn btn-info" type="submit" value="<?php _t("Buscar"); ?>" >
        
        </td>        
    </tr>
</form> 