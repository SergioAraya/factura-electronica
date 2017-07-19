<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h2>

<span class="glyphicon glyphicon-search"></span>

<?php _t("Buscar"); ?> 

</h2> 

<form class="" action="index.php" method="get"> 
<input type="hidden" name="p" value="paises"> 
<input type="hidden" name="c" value="buscar"> 
     <div class="form-group"> 
     <label for="paises_name" class="col-sm-2 control-label"><?php _t("Name");?></label> 
       <input type="text" class="form-control" name="paises_name" id="paises_name" placeholder="<?php _t("Name"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="paises_continent" class="col-sm-2 control-label"><?php _t("Continent");?></label> 
       <input type="text" class="form-control" name="paises_continent" id="paises_continent" placeholder="<?php _t("Continent"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="paises_Region" class="col-sm-2 control-label"><?php _t("Region");?></label> 
       <input type="text" class="form-control" name="paises_Region" id="paises_Region" placeholder="<?php _t("Region"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="paises_SurfaceArea" class="col-sm-2 control-label"><?php _t("SurfaceArea");?></label> 
       <input type="text" class="form-control" name="paises_SurfaceArea" id="paises_SurfaceArea" placeholder="<?php _t("SurfaceArea"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="paises_IndepYear" class="col-sm-2 control-label"><?php _t("IndepYear");?></label> 
       <input type="text" class="form-control" name="paises_IndepYear" id="paises_IndepYear" placeholder="<?php _t("IndepYear"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="paises_Population" class="col-sm-2 control-label"><?php _t("Population");?></label> 
       <input type="text" class="form-control" name="paises_Population" id="paises_Population" placeholder="<?php _t("Population"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="paises_LifeExpectancy" class="col-sm-2 control-label"><?php _t("LifeExpectancy");?></label> 
       <input type="text" class="form-control" name="paises_LifeExpectancy" id="paises_LifeExpectancy" placeholder="<?php _t("LifeExpectancy"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="paises_GNP" class="col-sm-2 control-label"><?php _t("GNP");?></label> 
       <input type="text" class="form-control" name="paises_GNP" id="paises_GNP" placeholder="<?php _t("GNP"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="paises_GNPOld" class="col-sm-2 control-label"><?php _t("GNPOld");?></label> 
       <input type="text" class="form-control" name="paises_GNPOld" id="paises_GNPOld" placeholder="<?php _t("GNPOld"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="paises_LocalName" class="col-sm-2 control-label"><?php _t("LocalName");?></label> 
       <input type="text" class="form-control" name="paises_LocalName" id="paises_LocalName" placeholder="<?php _t("LocalName"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="paises_GovernmentForm" class="col-sm-2 control-label"><?php _t("GovernmentForm");?></label> 
       <input type="text" class="form-control" name="paises_GovernmentForm" id="paises_GovernmentForm" placeholder="<?php _t("GovernmentForm"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="paises_HeadOfState" class="col-sm-2 control-label"><?php _t("HeadOfState");?></label> 
       <input type="text" class="form-control" name="paises_HeadOfState" id="paises_HeadOfState" placeholder="<?php _t("HeadOfState"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="paises_Capital" class="col-sm-2 control-label"><?php _t("Capital");?></label> 
       <input type="text" class="form-control" name="paises_Capital" id="paises_Capital" placeholder="<?php _t("Capital"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="paises_code2" class="col-sm-2 control-label"><?php _t("Code2");?></label> 
       <input type="text" class="form-control" name="paises_code2" id="paises_code2" placeholder="<?php _t("Code2"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="paises_prefijo_ruc" class="col-sm-2 control-label"><?php _t("Prefijo_ruc");?></label> 
       <input type="text" class="form-control" name="paises_prefijo_ruc" id="paises_prefijo_ruc" placeholder="<?php _t("Prefijo_ruc"); ?> "> 
   </div> 


       <button type="submit" class="btn btn-primary"><?php _t("Buscar"); ?></button> 
 </form> 
