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
<th><?php _t("Vil_cp"); ?></th> 
<th><?php _t("Vil_nom"); ?></th> 
 <th><?php _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "cp_ville", $_usuarios_grupo)){
             //   include "./cp_ville/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i = 1;
        while ($cp_ville = mysql_fetch_array($sql)) {
            include "./cp_ville/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "cp_ville", $_usuarios_grupo)){
                    include "./cp_ville/vista/tr.php";
                   // include "./cp_ville/vista/tr_editar.php";
                }else{
                    include "./cp_ville/vista/tr.php";
                }
            $i++;    
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "cp_ville", $_usuarios_grupo)){
             //   include "./cp_ville/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 


