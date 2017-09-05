<<<<<<< HEAD
<?php //include "tabs.php";    ?>
=======
<?php //include "tabs.php";   ?>
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
<h2> 
    <span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php echo _t("Lista de _traducciones"); ?> <a type="button" class="btn btn-primary navbar-btn" href="?p=_traducciones&c=crear"> <?php _t("Nueva"); ?></a>
</h2>

<p>
<<<<<<< HEAD
    Exportar <a href="index.php?p=_traducciones&c=export_sql">sql</a> 
    Exportar <a href="index.php?p=_traducciones&c=export_cvs">cvs</a> 
    Exportar <a href="index.php?p=_traducciones&c=export_google">google</a> 

</p>

<p><?php echo "$total_items items"; ?></p>
=======
Exportar <a href="index.php?p=_traducciones&c=export_sql">sql</a> 
Exportar <a href="index.php?p=_traducciones&c=export_cvs">cvs</a> 
Exportar <a href="index.php?p=_traducciones&c=export_google">google</a> 

</p>


>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
<table class="table table-striped">
    <thead>
        <tr> 
            <th><?php echo _t("Frase original"); ?></th> 
            <th><?php echo _t("Idioma"); ?></th> 
            <th><?php echo _t("Traduccion"); ?></th> 
            <th><?php echo _t("Accion"); ?></th> 
        </tr>
    </thead>
    <tbody>

        <tr>
<<<<<<< HEAD
            <?php
=======
            <?php 
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
            include "./_traducciones/vista/tr_buscar.php";
            ?>
        </tr>
        <?php
        $i = 1;
        while ($_traducciones = mysql_fetch_array($sql)) {
            include "./_traducciones/reg/reg.php";
            include "./_traducciones/vista/tr_editar.php";
<<<<<<< HEAD

            $i++;
        }
        ?>
        <tr>
            <?php
            // include "./_traducciones/vista/tr_anadir.php";
            ?>
        </tr>
    </tbody>
    <tfoot>
        <tr> 
            <th><?php echo _t("Frase original"); ?></th> 
            <th><?php echo _t("Idioma"); ?></th> 
            <th><?php echo _t("Traduccion"); ?></th> 
            <th><?php echo _t("Accion"); ?></th> 
        </tr>
    </tfoot>
    
=======
            
            $i++;
        }
        ?>
         <tr>
            <?php 
            include "./_traducciones/vista/tr_anadir.php";
            ?>
        </tr>
    </tbody>
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
</table> 

<?php
echo paginacion_master($p, $c, $total_items, $pag);
?>


