<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h1><?php _t("Buscar"); ?></h1>

<form method="get" action="index.php">
    <input  type="hidden" name="p" value="presupuesto_items">
    <input  type="hidden" name="c" value="buscar">
                    <div class="form-group">
                      <label for="Ref_presupuesto"><?php _t("Ref_presupuesto"); ?></label>
                      <input type="text" class="form-control" name="presupuesto_items_ref_presupuesto" id="presupuesto_items_ref_presupuesto" placeholder="<?php _t("Ref_presupuesto"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Cantidad"><?php _t("Cantidad"); ?></label>
                      <input type="text" class="form-control" name="presupuesto_items_cantidad" id="presupuesto_items_cantidad" placeholder="<?php _t("Cantidad"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Descripcion"><?php _t("Descripcion"); ?></label>
                      <input type="text" class="form-control" name="presupuesto_items_descripcion" id="presupuesto_items_descripcion" placeholder="<?php _t("Descripcion"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Valor"><?php _t("Valor"); ?></label>
                      <input type="text" class="form-control" name="presupuesto_items_valor" id="presupuesto_items_valor" placeholder="<?php _t("Valor"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Porcentaje_iva"><?php _t("Porcentaje_iva"); ?></label>
                      <input type="text" class="form-control" name="presupuesto_items_porcentaje_iva" id="presupuesto_items_porcentaje_iva" placeholder="<?php _t("Porcentaje_iva"); ?>">
                    </div>
                         
  <button type="submit" class="btn btn-default"><?php _t("Buscar"); ?></button>
</form>