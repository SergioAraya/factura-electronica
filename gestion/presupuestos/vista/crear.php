<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h2>

<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Nuevo"); ?></h2> 

</h2> 

<form class="form-horizontal" action="index.php" method="post"> 
<input type="hidden" name="p" value="presupuestos"> 
<input type="hidden" name="c" value="crear"> 
<input type="hidden" name="a" value="crear"> 

 <div class="form-group"> 
     <label for="presupuestos_ref" class="col-sm-2 control-label"><?php _t("Ref"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="presupuestos_ref" id="presupuestos_ref" placeholder="<?php _t("Ref"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="presupuestos_id_factura" class="col-sm-2 control-label"><?php _t("Factura"); ?></label> 
     <div class="col-sm-10"> 
        <select class="form-control" name="presupuestos_id_factura" >
        <?php facturas_add($presupuestos_id_factura); ?>
        </select>
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="presupuestos_id_contacto" class="col-sm-2 control-label"><?php _t("Contacto"); ?></label> 
     <div class="col-sm-10"> 
        <select class="form-control" name="presupuestos_id_contacto" >
        <?php contactos_add($presupuestos_id_contacto); ?>
        </select>
     </div> 
   </div> 


   <script>
            $( function() {
              $( "#presupuestos_fecha_registro" ).datepicker();
            } );
            </script>
 <div class="form-group"> 
     <label for="presupuestos_fecha_registro" class="col-sm-2 control-label"><?php _t("Fecha registro"); ?></label> 
     <div class="col-sm-3"> 
     <div class="input-group"> 
       <input type="text" class="form-control" name="presupuestos_fecha_registro" id="presupuestos_fecha_registro" placeholder="<?php _t("aaaa-mm-dd"); ?>" value=""   > 
     <div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div> 
     </div> 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="presupuestos_sub_total" class="col-sm-2 control-label"><?php _t("Sub total"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="presupuestos_sub_total" id="presupuestos_sub_total" placeholder="<?php _t("Sub total"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="presupuestos_iva" class="col-sm-2 control-label"><?php _t("Iva"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="presupuestos_iva" id="presupuestos_iva" placeholder="<?php _t("Iva"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="presupuestos_anticipo" class="col-sm-2 control-label"><?php _t("Anticipo"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="presupuestos_anticipo" id="presupuestos_anticipo" placeholder="<?php _t("Anticipo"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="presupuestos_saldo" class="col-sm-2 control-label"><?php _t("Saldo"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="presupuestos_saldo" id="presupuestos_saldo" placeholder="<?php _t("Saldo"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="presupuestos_comentarios" class="col-sm-2 control-label"><?php _t("Comentarios"); ?></label> 
     <div class="col-sm-10"> 
       <textarea  class="form-control" name="presupuestos_comentarios" id="presupuestos_comentarios" placeholder="<?php _t("Comentarios"); ?>"></textarea> 
     </div> 
   </div> 


   <script>
            $( function() {
              $( "#presupuestos_r1" ).datepicker();
            } );
            </script>
 <div class="form-group"> 
     <label for="presupuestos_r1" class="col-sm-2 control-label"><?php _t("R1"); ?></label> 
     <div class="col-sm-3"> 
     <div class="input-group"> 
       <input type="text" class="form-control" name="presupuestos_r1" id="presupuestos_r1" placeholder="<?php _t("aaaa-mm-dd"); ?>" value=""   > 
     <div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div> 
     </div> 
     </div> 
   </div> 


   <script>
            $( function() {
              $( "#presupuestos_r2" ).datepicker();
            } );
            </script>
 <div class="form-group"> 
     <label for="presupuestos_r2" class="col-sm-2 control-label"><?php _t("R2"); ?></label> 
     <div class="col-sm-3"> 
     <div class="input-group"> 
       <input type="text" class="form-control" name="presupuestos_r2" id="presupuestos_r2" placeholder="<?php _t("aaaa-mm-dd"); ?>" value=""   > 
     <div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div> 
     </div> 
     </div> 
   </div> 


   <script>
            $( function() {
              $( "#presupuestos_r3" ).datepicker();
            } );
            </script>
 <div class="form-group"> 
     <label for="presupuestos_r3" class="col-sm-2 control-label"><?php _t("R3"); ?></label> 
     <div class="col-sm-3"> 
     <div class="input-group"> 
       <input type="text" class="form-control" name="presupuestos_r3" id="presupuestos_r3" placeholder="<?php _t("aaaa-mm-dd"); ?>" value=""   > 
     <div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div> 
     </div> 
     </div> 
   </div> 


   <script>
            $( function() {
              $( "#presupuestos_fecha_cobro" ).datepicker();
            } );
            </script>
 <div class="form-group"> 
     <label for="presupuestos_fecha_cobro" class="col-sm-2 control-label"><?php _t("Fecha cobro"); ?></label> 
     <div class="col-sm-3"> 
     <div class="input-group"> 
       <input type="text" class="form-control" name="presupuestos_fecha_cobro" id="presupuestos_fecha_cobro" placeholder="<?php _t("aaaa-mm-dd"); ?>" value=""   > 
     <div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div> 
     </div> 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="presupuestos_expira" class="col-sm-2 control-label"><?php _t("Expira"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="presupuestos_expira" id="presupuestos_expira" placeholder="<?php _t("Expira"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="presupuestos_ce" class="col-sm-2 control-label"><?php _t("Ce"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="presupuestos_ce" id="presupuestos_ce" placeholder="<?php _t("Ce"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="presupuestos_estatus" class="col-sm-2 control-label"><?php _t("Estatus"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="presupuestos_estatus" id="presupuestos_estatus" placeholder="<?php _t("Estatus"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Registrar"); ?></button> 
     </div> 
   </div> 
 </form> 
