<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<div class="col-sm-3 col-md-2 sidebar"> 

<h2><?php _t("Buscar"); ?></h2> 

<form class="" action="index.php" method="get"> 
<input type="hidden" name="p" value="notac"> 
<input type="hidden" name="c" value="buscar"> 
     <div class="form-group"> 
     <label for="notac_ref" class="col-sm-2 control-label"><?php _t("Ref");?></label> 
       <input type="text" class="form-control" name="notac_ref" id="notac_ref" placeholder="<?php _t("Ref"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="notac_id_factura" class="col-sm-2 control-label"><?php _t("Factura");?></label> 
       <input type="text" class="form-control" name="notac_id_factura" id="notac_id_factura" placeholder="<?php _t("Id_factura"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="notac_id_contacto" class="col-sm-2 control-label"><?php _t("Contacto");?></label> 
       <input type="text" class="form-control" name="notac_id_contacto" id="notac_id_contacto" placeholder="<?php _t("Id_contacto"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="notac_fecha_registro" class="col-sm-2 control-label"><?php _t("Fecha_registro");?></label> 
       <input type="text" class="form-control" name="notac_fecha_registro" id="notac_fecha_registro" placeholder="<?php _t("Fecha_registro"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="notac_fecha_pago" class="col-sm-2 control-label"><?php _t("Fecha_pago");?></label> 
       <input type="text" class="form-control" name="notac_fecha_pago" id="notac_fecha_pago" placeholder="<?php _t("Fecha_pago"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="notac_sub_total" class="col-sm-2 control-label"><?php _t("Sub_total");?></label> 
       <input type="text" class="form-control" name="notac_sub_total" id="notac_sub_total" placeholder="<?php _t("Sub_total"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="notac_iva" class="col-sm-2 control-label"><?php _t("Iva");?></label> 
       <input type="text" class="form-control" name="notac_iva" id="notac_iva" placeholder="<?php _t("Iva"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="notac_comentarios" class="col-sm-2 control-label"><?php _t("Comentarios");?></label> 
       <input type="text" class="form-control" name="notac_comentarios" id="notac_comentarios" placeholder="<?php _t("Comentarios"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="notac_estatus" class="col-sm-2 control-label"><?php _t("Estatus");?></label> 
       <input type="text" class="form-control" name="notac_estatus" id="notac_estatus" placeholder="<?php _t("Estatus"); ?> "> 
   </div> 


       <button type="submit" class="btn btn-primary"><?php _t("Buscar"); ?></button> 
 </form> 
 </div> 
