<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h2>

<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Nuevo"); ?></h2> 

</h2> 

<form class="form-horizontal" action="index.php" method="post"> 
<input type="hidden" name="p" value="paises"> 
<input type="hidden" name="c" value="crear"> 
<input type="hidden" name="a" value="crear"> 

 <div class="form-group"> 
     <label for="paises_name" class="col-sm-2 control-label"><?php _t("Name"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="paises_name" id="paises_name" placeholder="<?php _t("Name"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="paises_Region" class="col-sm-2 control-label"><?php _t("Region"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="paises_Region" id="paises_Region" placeholder="<?php _t("Region"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="paises_SurfaceArea" class="col-sm-2 control-label"><?php _t("SurfaceArea"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="paises_SurfaceArea" id="paises_SurfaceArea" placeholder="<?php _t("SurfaceArea"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="paises_IndepYear" class="col-sm-2 control-label"><?php _t("IndepYear"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="paises_IndepYear" id="paises_IndepYear" placeholder="<?php _t("IndepYear"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="paises_Population" class="col-sm-2 control-label"><?php _t("Population"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="paises_Population" id="paises_Population" placeholder="<?php _t("Population"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="paises_LifeExpectancy" class="col-sm-2 control-label"><?php _t("LifeExpectancy"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="paises_LifeExpectancy" id="paises_LifeExpectancy" placeholder="<?php _t("LifeExpectancy"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="paises_GNP" class="col-sm-2 control-label"><?php _t("GNP"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="paises_GNP" id="paises_GNP" placeholder="<?php _t("GNP"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="paises_GNPOld" class="col-sm-2 control-label"><?php _t("GNPOld"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="paises_GNPOld" id="paises_GNPOld" placeholder="<?php _t("GNPOld"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="paises_LocalName" class="col-sm-2 control-label"><?php _t("LocalName"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="paises_LocalName" id="paises_LocalName" placeholder="<?php _t("LocalName"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="paises_GovernmentForm" class="col-sm-2 control-label"><?php _t("GovernmentForm"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="paises_GovernmentForm" id="paises_GovernmentForm" placeholder="<?php _t("GovernmentForm"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="paises_HeadOfState" class="col-sm-2 control-label"><?php _t("HeadOfState"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="paises_HeadOfState" id="paises_HeadOfState" placeholder="<?php _t("HeadOfState"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="paises_Capital" class="col-sm-2 control-label"><?php _t("Capital"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="paises_Capital" id="paises_Capital" placeholder="<?php _t("Capital"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="paises_code2" class="col-sm-2 control-label"><?php _t("Code2"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="paises_code2" id="paises_code2" placeholder="<?php _t("Code2"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="paises_prefijo_ruc" class="col-sm-2 control-label"><?php _t("Prefijo ruc"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="paises_prefijo_ruc" id="paises_prefijo_ruc" placeholder="<?php _t("Prefijo ruc"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Registrar"); ?></button> 
     </div> 
   </div> 
 </form> 
