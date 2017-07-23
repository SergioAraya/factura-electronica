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
<th><?php _t("Nombre"); ?></th> 
<th><?php _t("Descripcion"); ?></th> 
<th><?php _t("Version"); ?></th> 
<th><?php _t("Autor"); ?></th> 
<th><?php _t("Autor_email"); ?></th> 
<th><?php _t("Plugin_web"); ?></th> 
<th><?php _t("Plugin_zip"); ?></th> 
<th><?php _t("Orden"); ?></th> 
<th><?php _t("Estatus"); ?></th> 
 <th><?php _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "plugins", $_usuarios_grupo)){
             //   include "./plugins/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i = 1;
        while ($plugins = mysql_fetch_array($sql)) {
            include "./plugins/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "plugins", $_usuarios_grupo)){
                    include "./plugins/vista/tr.php";
                   // include "./plugins/vista/tr_editar.php";
                }else{
                    include "./plugins/vista/tr.php";
                }
            $i++;    
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "plugins", $_usuarios_grupo)){
             //   include "./plugins/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 


