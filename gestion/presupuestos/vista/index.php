<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<?php include "tabs.php"; ?>
<h2> 
<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php echo _t("presupuestos"); ?> 
<a type="button" class="btn btn-primary navbar-btn" href="?p=presupuestos&c=crear"> 
 <?php _t("Nuevo"); ?> 
</a>
</h2>

<table class="table table-striped"><?php presupuestos_thead(); ?><tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "presupuestos", $_usuarios_grupo)){
             //   include "./presupuestos/vista/tr_buscar.php";
                
            }
   ?><?php
                $i = 1; // cuenta lineas
                while ($presupuestos = mysql_fetch_array($sql)) {

                    include "./presupuestos/reg/reg.php";

                    $campo_disponibles = presupuestos_campos_disponibles();

                    echo "<tr>";
                    include "./presupuestos/vista/tr.php";            
                    echo "</tr>";

                    $i++;
                }
                ?></tbody>
                    <?php
                  if(permisos_tiene_permiso("crear", "presupuestos", $_usuarios_grupo)){
                            //   include "./presupuestos/vista/tr_anadir.php";

                           }
                  ?>
                   <?php presupuestos_tfoot(); ?>

               </table> 

               <?php  
               //echo paginacion($p, $c, isset($_REQUEST['pag'])); 
               echo paginacion_master($p, $c, $total_items, $pag);
               ?>