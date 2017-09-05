<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<div class="col-sm-3 col-md-2 sidebar"> 

<h2><?php _t("Buscar"); ?></h2> 

<form class="" action="index.php" method="get"> 
<input type="hidden" name="p" value="presupuestos"> 
<input type="hidden" name="c" value="buscar"> 
     <div class="form-group"> 
     <label for="presupuestos_ref" class="col-sm-2 control-label"><?php _t("Ref");?></label> 
       <input type="text" class="form-control" name="presupuestos_ref" id="presupuestos_ref" placeholder="<?php _t("Ref"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="presupuestos_id_factura" class="col-sm-2 control-label"><?php _t("Factura");?></label> 
       <input type="text" class="form-control" name="presupuestos_id_factura" id="presupuestos_id_factura" placeholder="<?php _t("Id_factura"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="presupuestos_id_contacto" class="col-sm-2 control-label"><?php _t("Contacto");?></label> 
       <input type="text" class="form-control" name="presupuestos_id_contacto" id="presupuestos_id_contacto" placeholder="<?php _t("Id_contacto"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="presupuestos_fecha_registro" class="col-sm-2 control-label"><?php _t("Fecha_registro");?></label> 
       <input type="text" class="form-control" name="presupuestos_fecha_registro" id="presupuestos_fecha_registro" placeholder="<?php _t("Fecha_registro"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="presupuestos_sub_total" class="col-sm-2 control-label"><?php _t("Sub_total");?></label> 
       <input type="text" class="form-control" name="presupuestos_sub_total" id="presupuestos_sub_total" placeholder="<?php _t("Sub_total"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="presupuestos_iva" class="col-sm-2 control-label"><?php _t("Iva");?></label> 
       <input type="text" class="form-control" name="presupuestos_iva" id="presupuestos_iva" placeholder="<?php _t("Iva"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="presupuestos_anticipo" class="col-sm-2 control-label"><?php _t("Anticipo");?></label> 
       <input type="text" class="form-control" name="presupuestos_anticipo" id="presupuestos_anticipo" placeholder="<?php _t("Anticipo"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="presupuestos_saldo" class="col-sm-2 control-label"><?php _t("Saldo");?></label> 
       <input type="text" class="form-control" name="presupuestos_saldo" id="presupuestos_saldo" placeholder="<?php _t("Saldo"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="presupuestos_comentarios" class="col-sm-2 control-label"><?php _t("Comentarios");?></label> 
       <input type="text" class="form-control" name="presupuestos_comentarios" id="presupuestos_comentarios" placeholder="<?php _t("Comentarios"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="presupuestos_r1" class="col-sm-2 control-label"><?php _t("R1");?></label> 
       <input type="text" class="form-control" name="presupuestos_r1" id="presupuestos_r1" placeholder="<?php _t("R1"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="presupuestos_r2" class="col-sm-2 control-label"><?php _t("R2");?></label> 
       <input type="text" class="form-control" name="presupuestos_r2" id="presupuestos_r2" placeholder="<?php _t("R2"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="presupuestos_r3" class="col-sm-2 control-label"><?php _t("R3");?></label> 
       <input type="text" class="form-control" name="presupuestos_r3" id="presupuestos_r3" placeholder="<?php _t("R3"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="presupuestos_fecha_cobro" class="col-sm-2 control-label"><?php _t("Fecha_cobro");?></label> 
       <input type="text" class="form-control" name="presupuestos_fecha_cobro" id="presupuestos_fecha_cobro" placeholder="<?php _t("Fecha_cobro"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="presupuestos_expira" class="col-sm-2 control-label"><?php _t("Expira");?></label> 
       <input type="text" class="form-control" name="presupuestos_expira" id="presupuestos_expira" placeholder="<?php _t("Expira"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="presupuestos_ce" class="col-sm-2 control-label"><?php _t("Ce");?></label> 
       <input type="text" class="form-control" name="presupuestos_ce" id="presupuestos_ce" placeholder="<?php _t("Ce"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="presupuestos_estatus" class="col-sm-2 control-label"><?php _t("Estatus");?></label> 
       <input type="text" class="form-control" name="presupuestos_estatus" id="presupuestos_estatus" placeholder="<?php _t("Estatus"); ?> "> 
   </div> 


       <button type="submit" class="btn btn-primary"><?php _t("Buscar"); ?></button> 
 </form> 
 </div> 
