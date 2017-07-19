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
<th><?php _t("Ref_notac"); ?></th> 
<th><?php _t("Cantidad"); ?></th> 
<th><?php _t("Descripcion"); ?></th> 
<th><?php _t("Valor"); ?></th> 
<th><?php _t("Porcentaje_iva"); ?></th> 
 <th><?php _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "notac_items", $_usuarios_grupo)){
             //   include "./notac_items/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i = 1;
        while ($notac_items = mysql_fetch_array($sql)) {
            include "./notac_items/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "notac_items", $_usuarios_grupo)){
                    include "./notac_items/vista/tr.php";
                   // include "./notac_items/vista/tr_editar.php";
                }else{
                    include "./notac_items/vista/tr.php";
                }
            $i++;    
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "notac_items", $_usuarios_grupo)){
             //   include "./notac_items/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 


