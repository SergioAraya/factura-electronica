<?php
/**
  magia_version: 0.0.8
 * */
$borrar = (permisos_tiene_permiso("borrar", "_traducciones", $_usuarios_grupo)) ? '<a class="btn btn-danger" href="index.php?p=_traducciones&c=borrar&a=borrar&id=' . $_traducciones_id . '">Borrar</a>' : '';
?>
<form method="post" action="index.php" >
    <input type="hidden" name="p" value="_traducciones">
    <input type="hidden" name="c" value="editar">    
    <input type="hidden" name="a" value="editar">    
    <input type="hidden" name="_traducciones_id" value="<?php echo $_traducciones_id; ?>">    
<<<<<<< HEAD
    <input type="hidden" name="_traducciones_frase" value="<?php echo $_traducciones_frase; ?>">    
    <input type="hidden" name="_traducciones_idioma" value="<?php echo $_traducciones_idioma; ?>">    
    <tr> 
        <td>
            <?php echo $_traducciones_frase; ?></td> 
        <td>
            <?php echo $_traducciones_idioma; ?></td> 
        <td><input class="form-control" type="text" name="_traducciones_traduccion" value="<?php echo $_traducciones_traduccion; ?>" placeholder="<?php echo $_traducciones_traduccion;  ?>"></td> 
        <td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
            <?php //echo $borrar; ?>
=======
    <tr> 
        <td>
            <input 
                readonly=""
                class="form-control" 
                type="text" 
                name="_traducciones_frase" 
                value="<?php echo $_traducciones_frase; ?>" 
                placeholder="<?php _t("Frase"); ?>"
                
                ></td> 
        <td><input readonly=""class="form-control" type="text" name="_traducciones_idioma" value="<?php echo $_traducciones_idioma; ?>" placeholder="<?php _t("Idioma"); ?>"></td> 
        <td><input class="form-control" type="text" name="_traducciones_traduccion" value="<?php echo $_traducciones_traduccion; ?>" placeholder="<?php _t("Traduccion"); ?>"></td> 
        <td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
            <?php echo $borrar; ?>
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
        </td>        
    </tr>
</form> 