<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<?php include "tabs.php"; ?>
<h2> 
<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php echo _t("balanza"); ?> 
<a type="button" class="btn btn-primary navbar-btn" href="?p=balanza&c=crear"> 
 <?php _t("Nuevo"); ?> 
</a>
</h2>

<table class="table table-striped"><?php balanza_thead(); ?><tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "balanza", $_usuarios_grupo)){
             //   include "./balanza/vista/tr_buscar.php";
                
            }
   ?><?php
                $i = 1; // cuenta lineas
                while ($balanza = mysql_fetch_array($sql)) {

                    include "./balanza/reg/reg.php";

                    $campo_disponibles = balanza_campos_disponibles();

                    echo "<tr>";
                    include "./balanza/vista/tr.php";            
                    echo "</tr>";

                    $i++;
                }
                ?></tbody>
                    <?php
                  if(permisos_tiene_permiso("crear", "balanza", $_usuarios_grupo)){
                            //   include "./balanza/vista/tr_anadir.php";

                           }
                  ?>
                   <?php balanza_tfoot(); ?>

               </table> 

               <?php  
               //echo paginacion($p, $c, isset($_REQUEST['pag'])); 
               echo paginacion_master($p, $c, $total_items, $pag);
               ?>