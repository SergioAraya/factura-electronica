<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h2>

<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Nuevo"); ?></h2> 

</h2> 

<form class="form-horizontal" action="index.php" method="post"> 
<input type="hidden" name="p" value="notac"> 
<input type="hidden" name="c" value="crear"> 
<input type="hidden" name="a" value="crear"> 

 <div class="form-group"> 
     <label for="notac_ref" class="col-sm-2 control-label"><?php _t("Ref"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="notac_ref" id="notac_ref" placeholder="<?php _t("Ref"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="notac_id_factura" class="col-sm-2 control-label"><?php _t("Factura"); ?></label> 
     <div class="col-sm-10"> 
        <select class="form-control" name="notac_id_factura" >
        <?php facturas_add($notac_id_factura); ?>
        </select>
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="notac_id_contacto" class="col-sm-2 control-label"><?php _t("Contacto"); ?></label> 
     <div class="col-sm-10"> 
        <select class="form-control" name="notac_id_contacto" >
        <?php contactos_add($notac_id_contacto); ?>
        </select>
     </div> 
   </div> 


   <script>
            $( function() {
              $( "#notac_fecha_registro" ).datepicker();
            } );
            </script>
 <div class="form-group"> 
     <label for="notac_fecha_registro" class="col-sm-2 control-label"><?php _t("Fecha registro"); ?></label> 
     <div class="col-sm-3"> 
     <div class="input-group"> 
       <input type="text" class="form-control" name="notac_fecha_registro" id="notac_fecha_registro" placeholder="<?php _t("aaaa-mm-dd"); ?>" value=""   > 
     <div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div> 
     </div> 
     </div> 
   </div> 


   <script>
            $( function() {
              $( "#notac_fecha_pago" ).datepicker();
            } );
            </script>
 <div class="form-group"> 
     <label for="notac_fecha_pago" class="col-sm-2 control-label"><?php _t("Fecha pago"); ?></label> 
     <div class="col-sm-3"> 
     <div class="input-group"> 
       <input type="text" class="form-control" name="notac_fecha_pago" id="notac_fecha_pago" placeholder="<?php _t("aaaa-mm-dd"); ?>" value=""   > 
     <div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div> 
     </div> 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="notac_sub_total" class="col-sm-2 control-label"><?php _t("Sub total"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="notac_sub_total" id="notac_sub_total" placeholder="<?php _t("Sub total"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="notac_iva" class="col-sm-2 control-label"><?php _t("Iva"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="notac_iva" id="notac_iva" placeholder="<?php _t("Iva"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="notac_comentarios" class="col-sm-2 control-label"><?php _t("Comentarios"); ?></label> 
     <div class="col-sm-10"> 
       <textarea  class="form-control" name="notac_comentarios" id="notac_comentarios" placeholder="<?php _t("Comentarios"); ?>"></textarea> 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="notac_estatus" class="col-sm-2 control-label"><?php _t("Estatus"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="notac_estatus" id="notac_estatus" placeholder="<?php _t("Estatus"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Registrar"); ?></button> 
     </div> 
   </div> 
 </form> 
