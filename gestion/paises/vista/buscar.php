<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<?php include "tabs.php"; ?>

<h2> 

<span class="glyphicon glyphicon-search"></span> 

<?php _t("Resultados de su busqueda en "); ?>

</h2>


<table class="table table-striped">
    <thead>
        <tr> 
<th><?php _t("Name"); ?></th> 
<th><?php _t("Continent"); ?></th> 
<th><?php _t("Region"); ?></th> 
<th><?php _t("SurfaceArea"); ?></th> 
<th><?php _t("IndepYear"); ?></th> 
<th><?php _t("Population"); ?></th> 
<th><?php _t("LifeExpectancy"); ?></th> 
<th><?php _t("GNP"); ?></th> 
<th><?php _t("GNPOld"); ?></th> 
<th><?php _t("LocalName"); ?></th> 
<th><?php _t("GovernmentForm"); ?></th> 
<th><?php _t("HeadOfState"); ?></th> 
<th><?php _t("Capital"); ?></th> 
<th><?php _t("Code2"); ?></th> 
<th><?php _t("Prefijo_ruc"); ?></th> 
 <th><?php _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "paises", $_usuarios_grupo)){
             //   include "./paises/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i = 1;
        while ($paises = mysql_fetch_array($sql)) {
            include "./paises/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "paises", $_usuarios_grupo)){
                    include "./paises/vista/tr.php";
                   // include "./paises/vista/tr_editar.php";
                }else{
                    include "./paises/vista/tr.php";
                }
            $i++;    
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "paises", $_usuarios_grupo)){
             //   include "./paises/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 


