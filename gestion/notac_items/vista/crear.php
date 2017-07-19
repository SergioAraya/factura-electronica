<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h2>

<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Nuevo"); ?></h2> 

</h2> 

<form class="form-horizontal" action="index.php" method="post"> 
<input type="hidden" name="p" value="notac_items"> 
<input type="hidden" name="c" value="crear"> 
<input type="hidden" name="a" value="crear"> 

 <div class="form-group"> 
     <label for="notac_items_ref_notac" class="col-sm-2 control-label"><?php _t("Ref notac"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="notac_items_ref_notac" id="notac_items_ref_notac" placeholder="<?php _t("Ref notac"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="notac_items_cantidad" class="col-sm-2 control-label"><?php _t("Cantidad"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="notac_items_cantidad" id="notac_items_cantidad" placeholder="<?php _t("Cantidad"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="notac_items_descripcion" class="col-sm-2 control-label"><?php _t("Descripcion"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="notac_items_descripcion" id="notac_items_descripcion" placeholder="<?php _t("Descripcion"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="notac_items_valor" class="col-sm-2 control-label"><?php _t("Valor"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="notac_items_valor" id="notac_items_valor" placeholder="<?php _t("Valor"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="notac_items_porcentaje_iva" class="col-sm-2 control-label"><?php _t("Porcentaje iva"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="notac_items_porcentaje_iva" id="notac_items_porcentaje_iva" placeholder="<?php _t("Porcentaje iva"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Registrar"); ?></button> 
     </div> 
   </div> 
 </form> 
