<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h1> 
<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Detalles"); ?> 
</h1> 
     <form class="form-horizontal" method="" action=""> 
     <input type="hidden" name="p" value="balanza"> 
     <input type="hidden" name="c" value="editar"> 
     <input type="hidden" name="balanza_id" value="<?php echo $balanza_id; ?>"> 
 <div class="form-group"> 
     <label for="balanza_id_contacto" class="col-sm-2 control-label"><?php _t("Contacto"); ?></label> 
     <div class="col-sm-10"> 
        <select class="form-control" name="balanza_id_contacto" disabled>
        <?php contactos_add($balanza_id_contacto); ?>
        </select>
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="balanza_id_factura" class="col-sm-2 control-label"><?php _t("Factura"); ?></label> 
     <div class="col-sm-10"> 
        <select class="form-control" name="balanza_id_factura" disabled>
        <?php facturas_add($balanza_id_factura); ?>
        </select>
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="balanza_tipo" class="col-sm-2 control-label"><?php _t("Tipo"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="balanza_tipo" id="balanza_tipo" placeholder="<?php _t("Tipo"); ?>" value="<?php echo $balanza_tipo; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="balanza_ref" class="col-sm-2 control-label"><?php _t("Ref"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="balanza_ref" id="balanza_ref" placeholder="<?php _t("Ref"); ?>" value="<?php echo $balanza_ref; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="balanza_descripcion" class="col-sm-2 control-label"><?php _t("Descripcion"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="balanza_descripcion" id="balanza_descripcion" placeholder="<?php _t("Descripcion"); ?>" value="<?php echo $balanza_descripcion; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="balanza_ce" class="col-sm-2 control-label"><?php _t("Ce"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="balanza_ce" id="balanza_ce" placeholder="<?php _t("Ce"); ?>" value="<?php echo $balanza_ce; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="balanza_sub_total" class="col-sm-2 control-label"><?php _t("Sub total"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="balanza_sub_total" id="balanza_sub_total" placeholder="<?php _t("Sub total"); ?>" value="<?php echo $balanza_sub_total; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="balanza_iva" class="col-sm-2 control-label"><?php _t("Iva"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="balanza_iva" id="balanza_iva" placeholder="<?php _t("Iva"); ?>" value="<?php echo $balanza_iva; ?>"  disabled > 
     </div> 
   </div> 


   <script>
            $( function() {
              $( "#balanza_fecha" ).datepicker();
            } );
            </script>
 <div class="form-group"> 
     <label for="balanza_fecha" class="col-sm-2 control-label"><?php _t("Fecha"); ?></label> 
     <div class="col-sm-3"> 
     <div class="input-group"> 
       <input type="text" class="form-control" name="balanza_fecha" id="balanza_fecha" placeholder="<?php _t("aaaa-mm-dd"); ?>" value="<?php echo $balanza_fecha; ?>"  disabled > 
     <div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div> 
     </div> 
     </div> 
   </div> 


   <script>
            $( function() {
              $( "#balanza_fecha_registro" ).datepicker();
            } );
            </script>
 <div class="form-group"> 
     <label for="balanza_fecha_registro" class="col-sm-2 control-label"><?php _t("Fecha registro"); ?></label> 
     <div class="col-sm-3"> 
     <div class="input-group"> 
       <input type="text" class="form-control" name="balanza_fecha_registro" id="balanza_fecha_registro" placeholder="<?php _t("aaaa-mm-dd"); ?>" value="<?php echo $balanza_fecha_registro; ?>"  disabled > 
     <div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div> 
     </div> 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="balanza_factura" class="col-sm-2 control-label"><?php _t("Factura"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="balanza_factura" id="balanza_factura" placeholder="<?php _t("Factura"); ?>" value="<?php echo $balanza_factura; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="balanza_banco" class="col-sm-2 control-label"><?php _t("Banco"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="balanza_banco" id="balanza_banco" placeholder="<?php _t("Banco"); ?>" value="<?php echo $balanza_banco; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="balanza_anulada" class="col-sm-2 control-label"><?php _t("Anulada"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="balanza_anulada" id="balanza_anulada" placeholder="<?php _t("Anulada"); ?>" value="<?php echo $balanza_anulada; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="balanza_cod_anu" class="col-sm-2 control-label"><?php _t("Cod anu"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="balanza_cod_anu" id="balanza_cod_anu" placeholder="<?php _t("Cod anu"); ?>" value="<?php echo $balanza_cod_anu; ?>"  disabled > 
     </div> 
   </div> 


   <div class="form-group"> 
 <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Editar"); ?></button> 
     </div> 
   </div>     
 </form> 
 <a href="index.php?p=balanza&c=txt&balanza_id=<?php echo $balanza_id; ?>">Formato texto</a> 
