<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<?php include "tabs.php"; ?>
<h2> 
<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php echo _t("cp_ville"); ?> 
<a type="button" class="btn btn-primary navbar-btn" href="?p=cp_ville&c=crear"> 
 <?php _t("Nuevo"); ?> 
</a>
</h2>

<table class="table table-striped"><?php cp_ville_thead(); ?><tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "cp_ville", $_usuarios_grupo)){
             //   include "./cp_ville/vista/tr_buscar.php";
                
            }
   ?><?php
                $i = 1; // cuenta lineas
                while ($cp_ville = mysql_fetch_array($sql)) {

                    include "./cp_ville/reg/reg.php";

                    $campo_disponibles = cp_ville_campos_disponibles();

                    echo "<tr>";
                    include "./cp_ville/vista/tr.php";            
                    echo "</tr>";

                    $i++;
                }
                ?></tbody>
                    <?php
                  if(permisos_tiene_permiso("crear", "cp_ville", $_usuarios_grupo)){
                            //   include "./cp_ville/vista/tr_anadir.php";

                           }
                  ?>
                   <?php cp_ville_tfoot(); ?>

               </table> 

               <?php  
               //echo paginacion($p, $c, isset($_REQUEST['pag'])); 
               echo paginacion_master($p, $c, $total_items, $pag);
               ?>