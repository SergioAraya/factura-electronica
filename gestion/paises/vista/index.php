<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<?php include "tabs.php"; ?>
<h2> 
<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php echo _t("paises"); ?> 
<a type="button" class="btn btn-primary navbar-btn" href="?p=paises&c=crear"> 
 <?php _t("Nuevo"); ?> 
</a>
</h2>

<table class="table table-striped"><?php paises_thead(); ?><tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "paises", $_usuarios_grupo)){
             //   include "./paises/vista/tr_buscar.php";
                
            }
   ?><?php
                $i = 1; // cuenta lineas
                while ($paises = mysql_fetch_array($sql)) {

                    include "./paises/reg/reg.php";

                    $campo_disponibles = paises_campos_disponibles();

                    echo "<tr>";
                    include "./paises/vista/tr.php";            
                    echo "</tr>";

                    $i++;
                }
                ?></tbody>
                    <?php
                  if(permisos_tiene_permiso("crear", "paises", $_usuarios_grupo)){
                            //   include "./paises/vista/tr_anadir.php";

                           }
                  ?>
                   <?php paises_tfoot(); ?>

               </table> 

               <?php  
               //echo paginacion($p, $c, isset($_REQUEST['pag'])); 
               echo paginacion_master($p, $c, $total_items, $pag);
               ?>