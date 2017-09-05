<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h1> 
<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Detalles"); ?> 
</h1> 
     <form class="form-horizontal" method="" action=""> 
     <input type="hidden" name="p" value="factura_items"> 
     <input type="hidden" name="c" value="editar"> 
     <input type="hidden" name="factura_items_id" value="<?php echo $factura_items_id; ?>"> 
 <div class="form-group"> 
     <label for="factura_items_ref_factura" class="col-sm-2 control-label"><?php _t("Ref factura"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="factura_items_ref_factura" id="factura_items_ref_factura" placeholder="<?php _t("Ref factura"); ?>" value="<?php echo $factura_items_ref_factura; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="factura_items_cantidad" class="col-sm-2 control-label"><?php _t("Cantidad"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="factura_items_cantidad" id="factura_items_cantidad" placeholder="<?php _t("Cantidad"); ?>" value="<?php echo $factura_items_cantidad; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="factura_items_descripcion" class="col-sm-2 control-label"><?php _t("Descripcion"); ?></label> 
     <div class="col-sm-10"> 
       <textarea disabled class="form-control" name="factura_items_descripcion" id="factura_items_descripcion" placeholder="<?php _t("Descripcion"); ?>"><?php echo $factura_items_descripcion; ?></textarea> 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="factura_items_valor" class="col-sm-2 control-label"><?php _t("Valor"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="factura_items_valor" id="factura_items_valor" placeholder="<?php _t("Valor"); ?>" value="<?php echo $factura_items_valor; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="factura_items_porcentaje_iva" class="col-sm-2 control-label"><?php _t("Porcentaje iva"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="factura_items_porcentaje_iva" id="factura_items_porcentaje_iva" placeholder="<?php _t("Porcentaje iva"); ?>" value="<?php echo $factura_items_porcentaje_iva; ?>"  disabled > 
     </div> 
   </div> 


   <div class="form-group"> 
 <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Editar"); ?></button> 
     </div> 
   </div>     
 </form> 
 <a href="index.php?p=factura_items&c=txt&factura_items_id=<?php echo $factura_items_id; ?>">Formato texto</a> 
