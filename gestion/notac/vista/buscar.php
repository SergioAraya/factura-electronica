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
<th><?php _t("Ref"); ?></th> 
<th><?php _t("Factura"); ?></th> 
<th><?php _t("Contacto"); ?></th> 
<th><?php _t("Fecha_registro"); ?></th> 
<th><?php _t("Fecha_pago"); ?></th> 
<th><?php _t("Sub_total"); ?></th> 
<th><?php _t("Iva"); ?></th> 
<th><?php _t("Comentarios"); ?></th> 
<th><?php _t("Estatus"); ?></th> 
 <th><?php _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "notac", $_usuarios_grupo)){
             //   include "./notac/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i = 1;
        while ($notac = mysql_fetch_array($sql)) {
            include "./notac/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "notac", $_usuarios_grupo)){
                    include "./notac/vista/tr.php";
                   // include "./notac/vista/tr_editar.php";
                }else{
                    include "./notac/vista/tr.php";
                }
            $i++;    
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "notac", $_usuarios_grupo)){
             //   include "./notac/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 


