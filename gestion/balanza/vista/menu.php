<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h1><?php _t("Buscar"); ?></h1>

<form method="get" action="index.php">
    <input  type="hidden" name="p" value="balanza">
    <input  type="hidden" name="c" value="buscar">
                    <div class="form-group">
                      <label for="Id_contacto"><?php _t("Contacto"); ?></label>
                      <input type="text" class="form-control" name="balanza_id_contacto" id="balanza_id_contacto" placeholder="<?php _t("Id_contacto"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Id_factura"><?php _t("Factura"); ?></label>
                      <input type="text" class="form-control" name="balanza_id_factura" id="balanza_id_factura" placeholder="<?php _t("Id_factura"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Tipo"><?php _t("Tipo"); ?></label>
                      <input type="text" class="form-control" name="balanza_tipo" id="balanza_tipo" placeholder="<?php _t("Tipo"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Ref"><?php _t("Ref"); ?></label>
                      <input type="text" class="form-control" name="balanza_ref" id="balanza_ref" placeholder="<?php _t("Ref"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Descripcion"><?php _t("Descripcion"); ?></label>
                      <input type="text" class="form-control" name="balanza_descripcion" id="balanza_descripcion" placeholder="<?php _t("Descripcion"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Ce"><?php _t("Ce"); ?></label>
                      <input type="text" class="form-control" name="balanza_ce" id="balanza_ce" placeholder="<?php _t("Ce"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Sub_total"><?php _t("Sub_total"); ?></label>
                      <input type="text" class="form-control" name="balanza_sub_total" id="balanza_sub_total" placeholder="<?php _t("Sub_total"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Iva"><?php _t("Iva"); ?></label>
                      <input type="text" class="form-control" name="balanza_iva" id="balanza_iva" placeholder="<?php _t("Iva"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Fecha"><?php _t("Fecha"); ?></label>
                      <input type="text" class="form-control" name="balanza_fecha" id="balanza_fecha" placeholder="<?php _t("Fecha"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Fecha_registro"><?php _t("Fecha_registro"); ?></label>
                      <input type="text" class="form-control" name="balanza_fecha_registro" id="balanza_fecha_registro" placeholder="<?php _t("Fecha_registro"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Factura"><?php _t("Factura"); ?></label>
                      <input type="text" class="form-control" name="balanza_factura" id="balanza_factura" placeholder="<?php _t("Factura"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Banco"><?php _t("Banco"); ?></label>
                      <input type="text" class="form-control" name="balanza_banco" id="balanza_banco" placeholder="<?php _t("Banco"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Anulada"><?php _t("Anulada"); ?></label>
                      <input type="text" class="form-control" name="balanza_anulada" id="balanza_anulada" placeholder="<?php _t("Anulada"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Cod_anu"><?php _t("Cod_anu"); ?></label>
                      <input type="text" class="form-control" name="balanza_cod_anu" id="balanza_cod_anu" placeholder="<?php _t("Cod_anu"); ?>">
                    </div>
                         
  <button type="submit" class="btn btn-default"><?php _t("Buscar"); ?></button>
</form>