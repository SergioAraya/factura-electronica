<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h1> 
<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Detalles"); ?> 
</h1> 
     <form class="form-horizontal" method="" action=""> 
     <input type="hidden" name="p" value="cp_ville"> 
     <input type="hidden" name="c" value="editar"> 
     <input type="hidden" name="cp_ville_id" value="<?php echo $cp_ville_id; ?>"> 
 <div class="form-group"> 
     <label for="cp_ville_vil_cp" class="col-sm-2 control-label"><?php _t("Vil cp"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="cp_ville_vil_cp" id="cp_ville_vil_cp" placeholder="<?php _t("Vil cp"); ?>" value="<?php echo $cp_ville_vil_cp; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="cp_ville_vil_nom" class="col-sm-2 control-label"><?php _t("Vil nom"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="cp_ville_vil_nom" id="cp_ville_vil_nom" placeholder="<?php _t("Vil nom"); ?>" value="<?php echo $cp_ville_vil_nom; ?>"  disabled > 
     </div> 
   </div> 


   <div class="form-group"> 
 <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Editar"); ?></button> 
     </div> 
   </div>     
 </form> 
 <a href="index.php?p=cp_ville&c=txt&cp_ville_id=<?php echo $cp_ville_id; ?>">Formato texto</a> 
