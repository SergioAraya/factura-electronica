<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h2>

<span class="glyphicon glyphicon-search"></span>

<?php _t("Buscar"); ?> 

</h2> 

<form class="" action="index.php" method="get"> 
<input type="hidden" name="p" value="factura_items"> 
<input type="hidden" name="c" value="buscar"> 
     <div class="form-group"> 
     <label for="factura_items_ref_factura" class="col-sm-2 control-label"><?php _t("Ref_factura");?></label> 
       <input type="text" class="form-control" name="factura_items_ref_factura" id="factura_items_ref_factura" placeholder="<?php _t("Ref_factura"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="factura_items_cantidad" class="col-sm-2 control-label"><?php _t("Cantidad");?></label> 
       <input type="text" class="form-control" name="factura_items_cantidad" id="factura_items_cantidad" placeholder="<?php _t("Cantidad"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="factura_items_descripcion" class="col-sm-2 control-label"><?php _t("Descripcion");?></label> 
       <input type="text" class="form-control" name="factura_items_descripcion" id="factura_items_descripcion" placeholder="<?php _t("Descripcion"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="factura_items_valor" class="col-sm-2 control-label"><?php _t("Valor");?></label> 
       <input type="text" class="form-control" name="factura_items_valor" id="factura_items_valor" placeholder="<?php _t("Valor"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="factura_items_porcentaje_iva" class="col-sm-2 control-label"><?php _t("Porcentaje_iva");?></label> 
       <input type="text" class="form-control" name="factura_items_porcentaje_iva" id="factura_items_porcentaje_iva" placeholder="<?php _t("Porcentaje_iva"); ?> "> 
   </div> 


       <button type="submit" class="btn btn-primary"><?php _t("Buscar"); ?></button> 
 </form> 
