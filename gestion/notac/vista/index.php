<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<?php include "tabs.php"; ?>
<h2> 
<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php echo _t("notac"); ?> 
<a type="button" class="btn btn-primary navbar-btn" href="?p=notac&c=crear"> 
 <?php _t("Nuevo"); ?> 
</a>
</h2>

<table class="table table-striped"><?php notac_thead(); ?><tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "notac", $_usuarios_grupo)){
             //   include "./notac/vista/tr_buscar.php";
                
            }
   ?><?php
                $i = 1; // cuenta lineas
                while ($notac = mysql_fetch_array($sql)) {

                    include "./notac/reg/reg.php";

                    $campo_disponibles = notac_campos_disponibles();

                    echo "<tr>";
                    include "./notac/vista/tr.php";            
                    echo "</tr>";

                    $i++;
                }
                ?></tbody>
                    <?php
                  if(permisos_tiene_permiso("crear", "notac", $_usuarios_grupo)){
                            //   include "./notac/vista/tr_anadir.php";

                           }
                  ?>
                   <?php notac_tfoot(); ?>

               </table> 

               <?php  
               //echo paginacion($p, $c, isset($_REQUEST['pag'])); 
               echo paginacion_master($p, $c, $total_items, $pag);
               ?>