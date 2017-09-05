<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<?php include "tabs.php"; ?>
<h2> 
<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php echo _t("factura_items"); ?> 
<a type="button" class="btn btn-primary navbar-btn" href="?p=factura_items&c=crear"> 
 <?php _t("Nuevo"); ?> 
</a>
</h2>

<table class="table table-striped"><?php factura_items_thead(); ?><tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "factura_items", $_usuarios_grupo)){
             //   include "./factura_items/vista/tr_buscar.php";
                
            }
   ?><?php
                $i = 1; // cuenta lineas
                while ($factura_items = mysql_fetch_array($sql)) {

                    include "./factura_items/reg/reg.php";

                    $campo_disponibles = factura_items_campos_disponibles();

                    echo "<tr>";
                    include "./factura_items/vista/tr.php";            
                    echo "</tr>";

                    $i++;
                }
                ?></tbody>
                    <?php
                  if(permisos_tiene_permiso("crear", "factura_items", $_usuarios_grupo)){
                            //   include "./factura_items/vista/tr_anadir.php";

                           }
                  ?>
                   <?php factura_items_tfoot(); ?>

               </table> 

               <?php  
               //echo paginacion($p, $c, isset($_REQUEST['pag'])); 
               echo paginacion_master($p, $c, $total_items, $pag);
               ?>