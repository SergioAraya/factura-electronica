<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<?php include "tabs.php"; ?>
<h2> 
<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php echo _t("notac_items"); ?> 
<a type="button" class="btn btn-primary navbar-btn" href="?p=notac_items&c=crear"> 
 <?php _t("Nuevo"); ?> 
</a>
</h2>

<table class="table table-striped"><?php notac_items_thead(); ?><tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "notac_items", $_usuarios_grupo)){
             //   include "./notac_items/vista/tr_buscar.php";
                
            }
   ?><?php
                $i = 1; // cuenta lineas
                while ($notac_items = mysql_fetch_array($sql)) {

                    include "./notac_items/reg/reg.php";

                    $campo_disponibles = notac_items_campos_disponibles();

                    echo "<tr>";
                    include "./notac_items/vista/tr.php";            
                    echo "</tr>";

                    $i++;
                }
                ?></tbody>
                    <?php
                  if(permisos_tiene_permiso("crear", "notac_items", $_usuarios_grupo)){
                            //   include "./notac_items/vista/tr_anadir.php";

                           }
                  ?>
                   <?php notac_items_tfoot(); ?>

               </table> 

               <?php  
               //echo paginacion($p, $c, isset($_REQUEST['pag'])); 
               echo paginacion_master($p, $c, $total_items, $pag);
               ?>