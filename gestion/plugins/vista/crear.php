<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h2>

<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Nuevo"); ?></h2> 

</h2> 

<form class="form-horizontal" action="index.php" method="post"> 
<input type="hidden" name="p" value="plugins"> 
<input type="hidden" name="c" value="crear"> 
<input type="hidden" name="a" value="crear"> 

 <div class="form-group"> 
     <label for="plugins_nombre" class="col-sm-2 control-label"><?php _t("Nombre"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="plugins_nombre" id="plugins_nombre" placeholder="<?php _t("Nombre"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="plugins_descripcion" class="col-sm-2 control-label"><?php _t("Descripcion"); ?></label> 
     <div class="col-sm-10"> 
       <textarea  class="form-control" name="plugins_descripcion" id="plugins_descripcion" placeholder="<?php _t("Descripcion"); ?>"></textarea> 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="plugins_version" class="col-sm-2 control-label"><?php _t("Version"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="plugins_version" id="plugins_version" placeholder="<?php _t("Version"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="plugins_autor" class="col-sm-2 control-label"><?php _t("Autor"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="plugins_autor" id="plugins_autor" placeholder="<?php _t("Autor"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="plugins_autor_email" class="col-sm-2 control-label"><?php _t("Autor email"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="plugins_autor_email" id="plugins_autor_email" placeholder="<?php _t("Autor email"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="plugins_plugin_web" class="col-sm-2 control-label"><?php _t("Plugin web"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="plugins_plugin_web" id="plugins_plugin_web" placeholder="<?php _t("Plugin web"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="plugins_plugin_zip" class="col-sm-2 control-label"><?php _t("Plugin zip"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="plugins_plugin_zip" id="plugins_plugin_zip" placeholder="<?php _t("Plugin zip"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="plugins_orden" class="col-sm-2 control-label"><?php _t("Orden"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="plugins_orden" id="plugins_orden" placeholder="<?php _t("Orden"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="plugins_estatus" class="col-sm-2 control-label"><?php _t("Estatus"); ?></label> 
     <div class="col-sm-10"> 
     <div class="radio">
        <label>
            <input  type="radio" name="plugins_estatus" value="1" >
            <?php _t("Activo"); ?> 
        </label>
     </div>
     <div class="radio">
        <label>
            <input  type="radio" name="plugins_estatus" value="0"  checked >
            <?php _t("Bloqueado"); ?>  
        </label>
     </div>
   </div> 
   </div> 


 <div class="form-group"> 
     <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Registrar"); ?></button> 
     </div> 
   </div> 
 </form> 
