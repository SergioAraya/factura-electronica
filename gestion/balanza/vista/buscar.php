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
<th><?php _t("Contacto"); ?></th> 
<th><?php _t("Factura"); ?></th> 
<th><?php _t("Tipo"); ?></th> 
<th><?php _t("Ref"); ?></th> 
<th><?php _t("Descripcion"); ?></th> 
<th><?php _t("Ce"); ?></th> 
<th><?php _t("Sub_total"); ?></th> 
<th><?php _t("Iva"); ?></th> 
<th><?php _t("Fecha"); ?></th> 
<th><?php _t("Fecha_registro"); ?></th> 
<th><?php _t("Factura"); ?></th> 
<th><?php _t("Banco"); ?></th> 
<th><?php _t("Anulada"); ?></th> 
<th><?php _t("Cod_anu"); ?></th> 
 <th><?php _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "balanza", $_usuarios_grupo)){
             //   include "./balanza/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i = 1;
        while ($balanza = mysql_fetch_array($sql)) {
            include "./balanza/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "balanza", $_usuarios_grupo)){
                    include "./balanza/vista/tr.php";
                   // include "./balanza/vista/tr_editar.php";
                }else{
                    include "./balanza/vista/tr.php";
                }
            $i++;    
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "balanza", $_usuarios_grupo)){
             //   include "./balanza/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 


