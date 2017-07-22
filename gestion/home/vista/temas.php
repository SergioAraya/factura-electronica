<h1><?php _t("Temas"); ?></h1>





    <div class="row">
        
        <?php
        $temas = array('loro','pato','conejo','condor');
        
        $i=0;
        while ($i < count($temas)) {
            echo '        
            <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="../temas/'.$temas[$i].'/imagenes/'.$temas[$i].'.jpg" alt="...">
                <div class="caption">
                    <h3>'.$temas[$i].'</h3>
                    <p>'.$temas[$i].' es un tema de base</p>
                    <p>';
                        
                        if(_opciones_valor_segun_opcion('tema') == $temas[$i]){
                            echo '<a href="index.php?p=_opciones&c=cambiar_tema&a=editar&_opciones_opcion=tema&_opciones_valor='.$temas[$i].'" class="btn btn-danger" role="button">'. _tr("Activo").'</a></p> ';
                        }else{
                            echo '<a href="index.php?p=_opciones&c=cambiar_tema&a=editar&_opciones_opcion=tema&_opciones_valor='.$temas[$i].'" class="btn btn-primary" role="button">'._tr("Activar").'</a></p>';                            
                        }
                        
                echo '</div>
            </div>
        </div>';
            $i++;
        }
        
        
        
        
        ?>
     
        
        
    </div>


