<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h1><?php _t("Buscar"); ?></h1>

<form method="get" action="index.php">
    <input  type="hidden" name="p" value="presupuestos">
    <input  type="hidden" name="c" value="buscar">
                    <div class="form-group">
                      <label for="Ref"><?php _t("Ref"); ?></label>
                      <input type="text" class="form-control" name="presupuestos_ref" id="presupuestos_ref" placeholder="<?php _t("Ref"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Id_factura"><?php _t("Factura"); ?></label>
                      <input type="text" class="form-control" name="presupuestos_id_factura" id="presupuestos_id_factura" placeholder="<?php _t("Id_factura"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Id_contacto"><?php _t("Contacto"); ?></label>
                      <input type="text" class="form-control" name="presupuestos_id_contacto" id="presupuestos_id_contacto" placeholder="<?php _t("Id_contacto"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Fecha_registro"><?php _t("Fecha_registro"); ?></label>
                      <input type="text" class="form-control" name="presupuestos_fecha_registro" id="presupuestos_fecha_registro" placeholder="<?php _t("Fecha_registro"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Sub_total"><?php _t("Sub_total"); ?></label>
                      <input type="text" class="form-control" name="presupuestos_sub_total" id="presupuestos_sub_total" placeholder="<?php _t("Sub_total"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Iva"><?php _t("Iva"); ?></label>
                      <input type="text" class="form-control" name="presupuestos_iva" id="presupuestos_iva" placeholder="<?php _t("Iva"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Anticipo"><?php _t("Anticipo"); ?></label>
                      <input type="text" class="form-control" name="presupuestos_anticipo" id="presupuestos_anticipo" placeholder="<?php _t("Anticipo"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Saldo"><?php _t("Saldo"); ?></label>
                      <input type="text" class="form-control" name="presupuestos_saldo" id="presupuestos_saldo" placeholder="<?php _t("Saldo"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Comentarios"><?php _t("Comentarios"); ?></label>
                      <input type="text" class="form-control" name="presupuestos_comentarios" id="presupuestos_comentarios" placeholder="<?php _t("Comentarios"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="R1"><?php _t("R1"); ?></label>
                      <input type="text" class="form-control" name="presupuestos_r1" id="presupuestos_r1" placeholder="<?php _t("R1"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="R2"><?php _t("R2"); ?></label>
                      <input type="text" class="form-control" name="presupuestos_r2" id="presupuestos_r2" placeholder="<?php _t("R2"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="R3"><?php _t("R3"); ?></label>
                      <input type="text" class="form-control" name="presupuestos_r3" id="presupuestos_r3" placeholder="<?php _t("R3"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Fecha_cobro"><?php _t("Fecha_cobro"); ?></label>
                      <input type="text" class="form-control" name="presupuestos_fecha_cobro" id="presupuestos_fecha_cobro" placeholder="<?php _t("Fecha_cobro"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Expira"><?php _t("Expira"); ?></label>
                      <input type="text" class="form-control" name="presupuestos_expira" id="presupuestos_expira" placeholder="<?php _t("Expira"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Ce"><?php _t("Ce"); ?></label>
                      <input type="text" class="form-control" name="presupuestos_ce" id="presupuestos_ce" placeholder="<?php _t("Ce"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Estatus"><?php _t("Estatus"); ?></label>
                      <input type="text" class="form-control" name="presupuestos_estatus" id="presupuestos_estatus" placeholder="<?php _t("Estatus"); ?>">
                    </div>
                         
  <button type="submit" class="btn btn-default"><?php _t("Buscar"); ?></button>
</form>