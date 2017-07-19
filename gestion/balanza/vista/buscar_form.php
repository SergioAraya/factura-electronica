<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h2>

<span class="glyphicon glyphicon-search"></span>

<?php _t("Buscar"); ?> 

</h2> 

<form class="" action="index.php" method="get"> 
<input type="hidden" name="p" value="balanza"> 
<input type="hidden" name="c" value="buscar"> 
     <div class="form-group"> 
     <label for="balanza_id_contacto" class="col-sm-2 control-label"><?php _t("Contacto");?></label> 
       <input type="text" class="form-control" name="balanza_id_contacto" id="balanza_id_contacto" placeholder="<?php _t("Id_contacto"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="balanza_id_factura" class="col-sm-2 control-label"><?php _t("Factura");?></label> 
       <input type="text" class="form-control" name="balanza_id_factura" id="balanza_id_factura" placeholder="<?php _t("Id_factura"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="balanza_tipo" class="col-sm-2 control-label"><?php _t("Tipo");?></label> 
       <input type="text" class="form-control" name="balanza_tipo" id="balanza_tipo" placeholder="<?php _t("Tipo"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="balanza_ref" class="col-sm-2 control-label"><?php _t("Ref");?></label> 
       <input type="text" class="form-control" name="balanza_ref" id="balanza_ref" placeholder="<?php _t("Ref"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="balanza_descripcion" class="col-sm-2 control-label"><?php _t("Descripcion");?></label> 
       <input type="text" class="form-control" name="balanza_descripcion" id="balanza_descripcion" placeholder="<?php _t("Descripcion"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="balanza_ce" class="col-sm-2 control-label"><?php _t("Ce");?></label> 
       <input type="text" class="form-control" name="balanza_ce" id="balanza_ce" placeholder="<?php _t("Ce"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="balanza_sub_total" class="col-sm-2 control-label"><?php _t("Sub_total");?></label> 
       <input type="text" class="form-control" name="balanza_sub_total" id="balanza_sub_total" placeholder="<?php _t("Sub_total"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="balanza_iva" class="col-sm-2 control-label"><?php _t("Iva");?></label> 
       <input type="text" class="form-control" name="balanza_iva" id="balanza_iva" placeholder="<?php _t("Iva"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="balanza_fecha" class="col-sm-2 control-label"><?php _t("Fecha");?></label> 
       <input type="text" class="form-control" name="balanza_fecha" id="balanza_fecha" placeholder="<?php _t("Fecha"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="balanza_fecha_registro" class="col-sm-2 control-label"><?php _t("Fecha_registro");?></label> 
       <input type="text" class="form-control" name="balanza_fecha_registro" id="balanza_fecha_registro" placeholder="<?php _t("Fecha_registro"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="balanza_factura" class="col-sm-2 control-label"><?php _t("Factura");?></label> 
       <input type="text" class="form-control" name="balanza_factura" id="balanza_factura" placeholder="<?php _t("Factura"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="balanza_banco" class="col-sm-2 control-label"><?php _t("Banco");?></label> 
       <input type="text" class="form-control" name="balanza_banco" id="balanza_banco" placeholder="<?php _t("Banco"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="balanza_anulada" class="col-sm-2 control-label"><?php _t("Anulada");?></label> 
       <input type="text" class="form-control" name="balanza_anulada" id="balanza_anulada" placeholder="<?php _t("Anulada"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="balanza_cod_anu" class="col-sm-2 control-label"><?php _t("Cod_anu");?></label> 
       <input type="text" class="form-control" name="balanza_cod_anu" id="balanza_cod_anu" placeholder="<?php _t("Cod_anu"); ?> "> 
   </div> 


       <button type="submit" class="btn btn-primary"><?php _t("Buscar"); ?></button> 
 </form> 
