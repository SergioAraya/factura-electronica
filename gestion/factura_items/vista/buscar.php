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
<th><?php _t("Ref_factura"); ?></th> 
<th><?php _t("Cantidad"); ?></th> 
<th><?php _t("Descripcion"); ?></th> 
<th><?php _t("Valor"); ?></th> 
<th><?php _t("Porcentaje_iva"); ?></th> 
 <th><?php _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "factura_items", $_usuarios_grupo)){
             //   include "./factura_items/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i = 1;
        while ($factura_items = mysql_fetch_array($sql)) {
            include "./factura_items/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "factura_items", $_usuarios_grupo)){
                    include "./factura_items/vista/tr.php";
                   // include "./factura_items/vista/tr_editar.php";
                }else{
                    include "./factura_items/vista/tr.php";
                }
            $i++;    
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "factura_items", $_usuarios_grupo)){
             //   include "./factura_items/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 


