<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h2>

<span class="glyphicon glyphicon-search"></span>

<?php _t("Buscar"); ?> 

</h2> 

<form class="" action="index.php" method="get"> 
<input type="hidden" name="p" value="notac_items"> 
<input type="hidden" name="c" value="buscar"> 
     <div class="form-group"> 
     <label for="notac_items_ref_notac" class="col-sm-2 control-label"><?php _t("Ref_notac");?></label> 
       <input type="text" class="form-control" name="notac_items_ref_notac" id="notac_items_ref_notac" placeholder="<?php _t("Ref_notac"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="notac_items_cantidad" class="col-sm-2 control-label"><?php _t("Cantidad");?></label> 
       <input type="text" class="form-control" name="notac_items_cantidad" id="notac_items_cantidad" placeholder="<?php _t("Cantidad"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="notac_items_descripcion" class="col-sm-2 control-label"><?php _t("Descripcion");?></label> 
       <input type="text" class="form-control" name="notac_items_descripcion" id="notac_items_descripcion" placeholder="<?php _t("Descripcion"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="notac_items_valor" class="col-sm-2 control-label"><?php _t("Valor");?></label> 
       <input type="text" class="form-control" name="notac_items_valor" id="notac_items_valor" placeholder="<?php _t("Valor"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="notac_items_porcentaje_iva" class="col-sm-2 control-label"><?php _t("Porcentaje_iva");?></label> 
       <input type="text" class="form-control" name="notac_items_porcentaje_iva" id="notac_items_porcentaje_iva" placeholder="<?php _t("Porcentaje_iva"); ?> "> 
   </div> 


       <button type="submit" class="btn btn-primary"><?php _t("Buscar"); ?></button> 
 </form> 
