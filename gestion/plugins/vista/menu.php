<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h1><?php _t("Buscar"); ?></h1>

<form method="get" action="index.php">
    <input  type="hidden" name="p" value="plugins">
    <input  type="hidden" name="c" value="buscar">
                    <div class="form-group">
                      <label for="Nombre"><?php _t("Nombre"); ?></label>
                      <input type="text" class="form-control" name="plugins_nombre" id="plugins_nombre" placeholder="<?php _t("Nombre"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Descripcion"><?php _t("Descripcion"); ?></label>
                      <input type="text" class="form-control" name="plugins_descripcion" id="plugins_descripcion" placeholder="<?php _t("Descripcion"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Version"><?php _t("Version"); ?></label>
                      <input type="text" class="form-control" name="plugins_version" id="plugins_version" placeholder="<?php _t("Version"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Autor"><?php _t("Autor"); ?></label>
                      <input type="text" class="form-control" name="plugins_autor" id="plugins_autor" placeholder="<?php _t("Autor"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Autor_email"><?php _t("Autor_email"); ?></label>
                      <input type="text" class="form-control" name="plugins_autor_email" id="plugins_autor_email" placeholder="<?php _t("Autor_email"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Plugin_web"><?php _t("Plugin_web"); ?></label>
                      <input type="text" class="form-control" name="plugins_plugin_web" id="plugins_plugin_web" placeholder="<?php _t("Plugin_web"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Plugin_zip"><?php _t("Plugin_zip"); ?></label>
                      <input type="text" class="form-control" name="plugins_plugin_zip" id="plugins_plugin_zip" placeholder="<?php _t("Plugin_zip"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Orden"><?php _t("Orden"); ?></label>
                      <input type="text" class="form-control" name="plugins_orden" id="plugins_orden" placeholder="<?php _t("Orden"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Estatus"><?php _t("Estatus"); ?></label>
                      <input type="text" class="form-control" name="plugins_estatus" id="plugins_estatus" placeholder="<?php _t("Estatus"); ?>">
                    </div>
                         
  <button type="submit" class="btn btn-default"><?php _t("Buscar"); ?></button>
</form>