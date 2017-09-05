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
<th><?php _t("Sub_total"); ?></th> 
<th><?php _t("Iva"); ?></th> 
<th><?php _t("Anticipo"); ?></th> 
<th><?php _t("Saldo"); ?></th> 
<th><?php _t("Comentarios"); ?></th> 
<th><?php _t("R1"); ?></th> 
<th><?php _t("R2"); ?></th> 
<th><?php _t("R3"); ?></th> 
<th><?php _t("Fecha_cobro"); ?></th> 
<th><?php _t("Expira"); ?></th> 
<th><?php _t("Ce"); ?></th> 
<th><?php _t("Estatus"); ?></th> 
 <th><?php _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "presupuestos", $_usuarios_grupo)){
             //   include "./presupuestos/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i = 1;
        while ($presupuestos = mysql_fetch_array($sql)) {
            include "./presupuestos/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "presupuestos", $_usuarios_grupo)){
                    include "./presupuestos/vista/tr.php";
                   // include "./presupuestos/vista/tr_editar.php";
                }else{
                    include "./presupuestos/vista/tr.php";
                }
            $i++;    
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "presupuestos", $_usuarios_grupo)){
             //   include "./presupuestos/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 


