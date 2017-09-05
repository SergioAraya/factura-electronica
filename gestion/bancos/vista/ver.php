<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h1> 
<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Detalles"); ?> 
</h1> 
     <form class="form-horizontal" method="" action=""> 
     <input type="hidden" name="p" value="bancos"> 
     <input type="hidden" name="c" value="editar"> 
     <input type="hidden" name="bancos_id" value="<?php echo $bancos_id; ?>"> 
 <div class="form-group"> 
     <label for="bancos_banco" class="col-sm-2 control-label"><?php _t("Banco"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="bancos_banco" id="bancos_banco" placeholder="<?php _t("Banco"); ?>" value="<?php echo $bancos_banco; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="bancos_cuenta" class="col-sm-2 control-label"><?php _t("Cuenta"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="bancos_cuenta" id="bancos_cuenta" placeholder="<?php _t("Cuenta"); ?>" value="<?php echo $bancos_cuenta; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="bancos_iban" class="col-sm-2 control-label"><?php _t("Iban"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="bancos_iban" id="bancos_iban" placeholder="<?php _t("Iban"); ?>" value="<?php echo $bancos_iban; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="bancos_orden" class="col-sm-2 control-label"><?php _t("Orden"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="bancos_orden" id="bancos_orden" placeholder="<?php _t("Orden"); ?>" value="<?php echo $bancos_orden; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="bancos_estatus" class="col-sm-2 control-label"><?php _t("Estatus"); ?></label> 
     <div class="col-sm-10"> 
     <div class="radio">
        <label>
            <input disabled type="radio" name="bancos_estatus" value="1" <?php echo "$bancos_estatus_1"; ?>  >
            <?php _t("Activo"); ?> 
        </label>
     </div>
     <div class="radio">
        <label>
            <input disabled type="radio" name="bancos_estatus" value="0"  <?php echo "$bancos_estatus_0"; ?>  >
            <?php _t("Bloqueado"); ?>  
        </label>
     </div>
   </div> 
   </div> 


   <div class="form-group"> 
 <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Editar"); ?></button> 
     </div> 
   </div>     
 </form> 
 <a href="index.php?p=bancos&c=txt&bancos_id=<?php echo $bancos_id; ?>">Formato texto</a> 
