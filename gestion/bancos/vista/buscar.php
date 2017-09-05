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
<th><?php _t("Banco"); ?></th> 
<th><?php _t("Cuenta"); ?></th> 
<th><?php _t("Iban"); ?></th> 
<th><?php _t("Orden"); ?></th> 
<th><?php _t("Estatus"); ?></th> 
 <th><?php _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "bancos", $_usuarios_grupo)){
             //   include "./bancos/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i = 1;
        while ($bancos = mysql_fetch_array($sql)) {
            include "./bancos/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "bancos", $_usuarios_grupo)){
                    include "./bancos/vista/tr.php";
                   // include "./bancos/vista/tr_editar.php";
                }else{
                    include "./bancos/vista/tr.php";
                }
            $i++;    
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "bancos", $_usuarios_grupo)){
             //   include "./bancos/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 


