<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>

            <form method="post" action="index.php" >
                <input type="hidden" name="p" value="facturas">
                <input type="hidden" name="c" value="crear">    
                <input type="hidden" name="a" value="crear">    
                <tr> <td><input class="form-control" type="text" name="facturas_ref" value="" placeholder="<?php _t("Ref"); ?>"></td> 
 <td><input class="form-control" type="text" name="facturas_id_presupuesto" value="" placeholder="<?php _t("Id_presupuesto"); ?>"></td> 
 <td><input class="form-control" type="text" name="facturas_id_notac" value="" placeholder="<?php _t("Id_notac"); ?>"></td> 
 <td><input class="form-control" type="text" name="facturas_id_contacto" value="" placeholder="<?php _t("Id_contacto"); ?>"></td> 
 <td><input class="form-control" type="text" name="facturas_fecha_registro" value="" placeholder="<?php _t("Fecha_registro"); ?>"></td> 
 <td><input class="form-control" type="text" name="facturas_sub_total" value="" placeholder="<?php _t("Sub_total"); ?>"></td> 
 <td><input class="form-control" type="text" name="facturas_iva" value="" placeholder="<?php _t("Iva"); ?>"></td> 
 <td><input class="form-control" type="text" name="facturas_anticipo" value="" placeholder="<?php _t("Anticipo"); ?>"></td> 
 <td><input class="form-control" type="text" name="facturas_saldo" value="" placeholder="<?php _t("Saldo"); ?>"></td> 
 <td><input class="form-control" type="text" name="facturas_comentarios" value="" placeholder="<?php _t("Comentarios"); ?>"></td> 
 <td><input class="form-control" type="text" name="facturas_r1" value="" placeholder="<?php _t("R1"); ?>"></td> 
 <td><input class="form-control" type="text" name="facturas_r2" value="" placeholder="<?php _t("R2"); ?>"></td> 
 <td><input class="form-control" type="text" name="facturas_r3" value="" placeholder="<?php _t("R3"); ?>"></td> 
 <td><input class="form-control" type="text" name="facturas_fecha_cobro" value="" placeholder="<?php _t("Fecha_cobro"); ?>"></td> 
 <td><input class="form-control" type="text" name="facturas_expira" value="" placeholder="<?php _t("Expira"); ?>"></td> 
 <td><input class="form-control" type="text" name="facturas_ce" value="" placeholder="<?php _t("Ce"); ?>"></td> 
 <td><input class="form-control" type="text" name="facturas_estatus" value="" placeholder="<?php _t("Estatus"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" ></td>        
    </tr>
</form> 