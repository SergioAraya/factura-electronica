<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
   
$borrar = (permisos_tiene_permiso("borrar", "presupuestos", $_usuarios_grupo))?'<a class="btn btn-danger" href="index.php?p=presupuestos&c=borrar&a=borrar&id='.$id.'">Borrar</a>':''; ?><form method="post" action="index.php" >
            <input type="hidden" name="p" value="presupuestos">
            <input type="hidden" name="c" value="editar">    
            <input type="hidden" name="a" value="editar">    
            <input type="hidden" name="presupuestos_id" value="<?php echo $presupuestos_id; ?>">    
            <tr> <td><input class="form-control" type="text" name="presupuestos_ref" value="<?php echo $presupuestos_ref; ?>" placeholder="<?php _t("Ref"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuestos_id_factura" value="<?php echo $presupuestos_id_factura; ?>" placeholder="<?php _t("Id_factura"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuestos_id_contacto" value="<?php echo $presupuestos_id_contacto; ?>" placeholder="<?php _t("Id_contacto"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuestos_fecha_registro" value="<?php echo $presupuestos_fecha_registro; ?>" placeholder="<?php _t("Fecha_registro"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuestos_sub_total" value="<?php echo $presupuestos_sub_total; ?>" placeholder="<?php _t("Sub_total"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuestos_iva" value="<?php echo $presupuestos_iva; ?>" placeholder="<?php _t("Iva"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuestos_anticipo" value="<?php echo $presupuestos_anticipo; ?>" placeholder="<?php _t("Anticipo"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuestos_saldo" value="<?php echo $presupuestos_saldo; ?>" placeholder="<?php _t("Saldo"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuestos_comentarios" value="<?php echo $presupuestos_comentarios; ?>" placeholder="<?php _t("Comentarios"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuestos_r1" value="<?php echo $presupuestos_r1; ?>" placeholder="<?php _t("R1"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuestos_r2" value="<?php echo $presupuestos_r2; ?>" placeholder="<?php _t("R2"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuestos_r3" value="<?php echo $presupuestos_r3; ?>" placeholder="<?php _t("R3"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuestos_fecha_cobro" value="<?php echo $presupuestos_fecha_cobro; ?>" placeholder="<?php _t("Fecha_cobro"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuestos_expira" value="<?php echo $presupuestos_expira; ?>" placeholder="<?php _t("Expira"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuestos_ce" value="<?php echo $presupuestos_ce; ?>" placeholder="<?php _t("Ce"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuestos_estatus" value="<?php echo $presupuestos_estatus; ?>" placeholder="<?php _t("Estatus"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 