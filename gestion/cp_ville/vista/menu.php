<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h1><?php _t("Buscar"); ?></h1>

<form method="get" action="index.php">
    <input  type="hidden" name="p" value="cp_ville">
    <input  type="hidden" name="c" value="buscar">
                    <div class="form-group">
                      <label for="Vil_cp"><?php _t("Vil_cp"); ?></label>
                      <input type="text" class="form-control" name="cp_ville_vil_cp" id="cp_ville_vil_cp" placeholder="<?php _t("Vil_cp"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Vil_nom"><?php _t("Vil_nom"); ?></label>
                      <input type="text" class="form-control" name="cp_ville_vil_nom" id="cp_ville_vil_nom" placeholder="<?php _t("Vil_nom"); ?>">
                    </div>
                         
  <button type="submit" class="btn btn-default"><?php _t("Buscar"); ?></button>
</form>