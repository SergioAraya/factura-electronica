<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h1><?php _t("Buscar"); ?></h1>

<form method="get" action="index.php">
    <input  type="hidden" name="p" value="bancos">
    <input  type="hidden" name="c" value="buscar">
                    <div class="form-group">
                      <label for="Banco"><?php _t("Banco"); ?></label>
                      <input type="text" class="form-control" name="bancos_banco" id="bancos_banco" placeholder="<?php _t("Banco"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Cuenta"><?php _t("Cuenta"); ?></label>
                      <input type="text" class="form-control" name="bancos_cuenta" id="bancos_cuenta" placeholder="<?php _t("Cuenta"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Iban"><?php _t("Iban"); ?></label>
                      <input type="text" class="form-control" name="bancos_iban" id="bancos_iban" placeholder="<?php _t("Iban"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Orden"><?php _t("Orden"); ?></label>
                      <input type="text" class="form-control" name="bancos_orden" id="bancos_orden" placeholder="<?php _t("Orden"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Estatus"><?php _t("Estatus"); ?></label>
                      <input type="text" class="form-control" name="bancos_estatus" id="bancos_estatus" placeholder="<?php _t("Estatus"); ?>">
                    </div>
                         
  <button type="submit" class="btn btn-default"><?php _t("Buscar"); ?></button>
</form>