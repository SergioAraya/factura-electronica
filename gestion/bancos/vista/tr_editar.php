<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
   
$borrar = (permisos_tiene_permiso("borrar", "bancos", $_usuarios_grupo))?'<a class="btn btn-danger" href="index.php?p=bancos&c=borrar&a=borrar&id='.$id.'">Borrar</a>':''; ?><form method="post" action="index.php" >
            <input type="hidden" name="p" value="bancos">
            <input type="hidden" name="c" value="editar">    
            <input type="hidden" name="a" value="editar">    
            <input type="hidden" name="bancos_id" value="<?php echo $bancos_id; ?>">    
            <tr> <td><input class="form-control" type="text" name="bancos_banco" value="<?php echo $bancos_banco; ?>" placeholder="<?php _t("Banco"); ?>"></td> 
 <td><input class="form-control" type="text" name="bancos_cuenta" value="<?php echo $bancos_cuenta; ?>" placeholder="<?php _t("Cuenta"); ?>"></td> 
 <td><input class="form-control" type="text" name="bancos_iban" value="<?php echo $bancos_iban; ?>" placeholder="<?php _t("Iban"); ?>"></td> 
 <td><input class="form-control" type="text" name="bancos_orden" value="<?php echo $bancos_orden; ?>" placeholder="<?php _t("Orden"); ?>"></td> 
 <td><input class="form-control" type="text" name="bancos_estatus" value="<?php echo $bancos_estatus; ?>" placeholder="<?php _t("Estatus"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 