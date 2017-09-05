<?php /**
  magia_version: 0.0.11
 * */ ?>
<h2>

    <span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php _t("Nuevo"); ?></h2> 

</h2> 

<form class="form-horizontal" action="index.php" method="post"> 
    <input type="hidden" name="p" value="facturas"> 
    <input type="hidden" name="c" value="crear"> 
    <input type="hidden" name="a" value="crear"> 

    <div class="form-group"> 
        <label for="facturas_id_contacto" class="col-sm-2 control-label"><?php _t("Contacto"); ?></label> 
        <div class="col-sm-5"> 
            <select class="form-control" name="facturas_id_contacto" >
                <?php contactos_add($facturas_id_contacto); ?>
            </select>
            
        </div> 
        <div class="col-sm-2"> 
            <button 
                type="button" 
                class="btn btn-primary btn-sm" 
                data-toggle="modal" 
                data-target=".bs-example-modal-lg"><?php _t("Nuevo"); ?></button>
        </div> 
    </div> 

    
    

    <div class="form-group"> 
        <label for="facturas_comentarios" class="col-sm-2 control-label"><?php _t("Comentarios"); ?></label> 
        <div class="col-sm-10"> 
            <textarea  class="form-control" name="facturas_comentarios" id="facturas_comentarios" placeholder="<?php _t("Comentarios"); ?>"></textarea> 
        </div> 
    </div> 
    
    
        <div class="form-group"> 
        <label for="facturas_expira" class="col-sm-2 control-label"><?php _t("Expira"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="facturas_expira" id="facturas_expira" placeholder="<?php _t("Expira"); ?>" value=""   > 
        </div> 
    </div> 



    <div class="form-group"> 
        <div class="col-sm-offset-2 col-sm-10"> 
            <button type="submit" class="btn btn-primary"><?php _t("Registrar"); ?></button> 
        </div> 
    </div> 
</form> 



<!-- Large modal -->


<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <?php 
      include "contactos/vista/crear.php"; 
      ?>
        
    </div>
  </div>
</div>

