<form method="" action="">
    <input type="hidden" name="p" value="factura_items">
    <input type="hidden" name="c" value="borrar">
    <input type="hidden" name="a" value="borrar">
    <input type="hidden" name="factura_items_id" value="<?php echo "$factura_items_id"; ?>">
    <tr>
        <td><?php echo "$factura_items_cantidad"; ?></td>
        <td><?php echo "$factura_items_descripcion"; ?></td>
        <td class="text-center"><?php echo "$factura_items_porcentaje_iva"; ?>%</td>
        <td class="text-right"><?php echo moneda($factura_items_valor); ?></td>                
        <td class="text-right"><?php echo moneda($factura_items_totaltvac); ?></td>                
        <td><input class="btn btn-danger" type="submit" value="<?php _t("Borrar"); ?>"></td>
    </tr>  
</form>  