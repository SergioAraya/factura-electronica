<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<?php include "tabs.php"; ?>
<h2> 
<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php echo _t("presupuesto_items"); ?> 
<a type="button" class="btn btn-primary navbar-btn" href="?p=presupuesto_items&c=crear"> 
 <?php _t("Nuevo"); ?> 
</a>
</h2>

<table class="table table-striped"><?php presupuesto_items_thead(); ?><tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "presupuesto_items", $_usuarios_grupo)){
             //   include "./presupuesto_items/vista/tr_buscar.php";
                
            }
   ?><?php
                $i = 1; // cuenta lineas
                while ($presupuesto_items = mysql_fetch_array($sql)) {

                    include "./presupuesto_items/reg/reg.php";

                    $campo_disponibles = presupuesto_items_campos_disponibles();

                    echo "<tr>";
                    include "./presupuesto_items/vista/tr.php";            
                    echo "</tr>";

                    $i++;
                }
                ?></tbody>
                    <?php
                  if(permisos_tiene_permiso("crear", "presupuesto_items", $_usuarios_grupo)){
                            //   include "./presupuesto_items/vista/tr_anadir.php";

                           }
                  ?>
                   <?php presupuesto_items_tfoot(); ?>

               </table> 

               <?php  
               //echo paginacion($p, $c, isset($_REQUEST['pag'])); 
               echo paginacion_master($p, $c, $total_items, $pag);
               ?>