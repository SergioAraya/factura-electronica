<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<div class="col-sm-3 col-md-2 sidebar"> 

<h2><?php _t("Buscar"); ?></h2> 

<form class="" action="index.php" method="get"> 
<input type="hidden" name="p" value="plugins"> 
<input type="hidden" name="c" value="buscar"> 
     <div class="form-group"> 
     <label for="plugins_nombre" class="col-sm-2 control-label"><?php _t("Nombre");?></label> 
       <input type="text" class="form-control" name="plugins_nombre" id="plugins_nombre" placeholder="<?php _t("Nombre"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="plugins_descripcion" class="col-sm-2 control-label"><?php _t("Descripcion");?></label> 
       <input type="text" class="form-control" name="plugins_descripcion" id="plugins_descripcion" placeholder="<?php _t("Descripcion"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="plugins_version" class="col-sm-2 control-label"><?php _t("Version");?></label> 
       <input type="text" class="form-control" name="plugins_version" id="plugins_version" placeholder="<?php _t("Version"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="plugins_autor" class="col-sm-2 control-label"><?php _t("Autor");?></label> 
       <input type="text" class="form-control" name="plugins_autor" id="plugins_autor" placeholder="<?php _t("Autor"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="plugins_autor_email" class="col-sm-2 control-label"><?php _t("Autor_email");?></label> 
       <input type="text" class="form-control" name="plugins_autor_email" id="plugins_autor_email" placeholder="<?php _t("Autor_email"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="plugins_plugin_web" class="col-sm-2 control-label"><?php _t("Plugin_web");?></label> 
       <input type="text" class="form-control" name="plugins_plugin_web" id="plugins_plugin_web" placeholder="<?php _t("Plugin_web"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="plugins_plugin_zip" class="col-sm-2 control-label"><?php _t("Plugin_zip");?></label> 
       <input type="text" class="form-control" name="plugins_plugin_zip" id="plugins_plugin_zip" placeholder="<?php _t("Plugin_zip"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="plugins_orden" class="col-sm-2 control-label"><?php _t("Orden");?></label> 
       <input type="text" class="form-control" name="plugins_orden" id="plugins_orden" placeholder="<?php _t("Orden"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="plugins_estatus" class="col-sm-2 control-label"><?php _t("Estatus");?></label> 
       <input type="text" class="form-control" name="plugins_estatus" id="plugins_estatus" placeholder="<?php _t("Estatus"); ?> "> 
   </div> 


       <button type="submit" class="btn btn-primary"><?php _t("Buscar"); ?></button> 
 </form> 
 </div> 
