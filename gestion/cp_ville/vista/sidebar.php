<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<div class="col-sm-3 col-md-2 sidebar"> 

<h2><?php _t("Buscar"); ?></h2> 

<form class="" action="index.php" method="get"> 
<input type="hidden" name="p" value="cp_ville"> 
<input type="hidden" name="c" value="buscar"> 
     <div class="form-group"> 
     <label for="cp_ville_vil_cp" class="col-sm-2 control-label"><?php _t("Vil_cp");?></label> 
       <input type="text" class="form-control" name="cp_ville_vil_cp" id="cp_ville_vil_cp" placeholder="<?php _t("Vil_cp"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="cp_ville_vil_nom" class="col-sm-2 control-label"><?php _t("Vil_nom");?></label> 
       <input type="text" class="form-control" name="cp_ville_vil_nom" id="cp_ville_vil_nom" placeholder="<?php _t("Vil_nom"); ?> "> 
   </div> 


       <button type="submit" class="btn btn-primary"><?php _t("Buscar"); ?></button> 
 </form> 
 </div> 
