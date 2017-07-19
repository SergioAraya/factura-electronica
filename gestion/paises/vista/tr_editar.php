<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
   
$borrar = (permisos_tiene_permiso("borrar", "paises", $_usuarios_grupo))?'<a class="btn btn-danger" href="index.php?p=paises&c=borrar&a=borrar&id='.$id.'">Borrar</a>':''; ?><form method="post" action="index.php" >
            <input type="hidden" name="p" value="paises">
            <input type="hidden" name="c" value="editar">    
            <input type="hidden" name="a" value="editar">    
            <input type="hidden" name="paises_id" value="<?php echo $paises_id; ?>">    
            <tr> <td><input class="form-control" type="text" name="paises_name" value="<?php echo $paises_name; ?>" placeholder="<?php _t("Name"); ?>"></td> 
 <td><input class="form-control" type="text" name="paises_continent" value="<?php echo $paises_continent; ?>" placeholder="<?php _t("Continent"); ?>"></td> 
 <td><input class="form-control" type="text" name="paises_Region" value="<?php echo $paises_Region; ?>" placeholder="<?php _t("Region"); ?>"></td> 
 <td><input class="form-control" type="text" name="paises_SurfaceArea" value="<?php echo $paises_SurfaceArea; ?>" placeholder="<?php _t("SurfaceArea"); ?>"></td> 
 <td><input class="form-control" type="text" name="paises_IndepYear" value="<?php echo $paises_IndepYear; ?>" placeholder="<?php _t("IndepYear"); ?>"></td> 
 <td><input class="form-control" type="text" name="paises_Population" value="<?php echo $paises_Population; ?>" placeholder="<?php _t("Population"); ?>"></td> 
 <td><input class="form-control" type="text" name="paises_LifeExpectancy" value="<?php echo $paises_LifeExpectancy; ?>" placeholder="<?php _t("LifeExpectancy"); ?>"></td> 
 <td><input class="form-control" type="text" name="paises_GNP" value="<?php echo $paises_GNP; ?>" placeholder="<?php _t("GNP"); ?>"></td> 
 <td><input class="form-control" type="text" name="paises_GNPOld" value="<?php echo $paises_GNPOld; ?>" placeholder="<?php _t("GNPOld"); ?>"></td> 
 <td><input class="form-control" type="text" name="paises_LocalName" value="<?php echo $paises_LocalName; ?>" placeholder="<?php _t("LocalName"); ?>"></td> 
 <td><input class="form-control" type="text" name="paises_GovernmentForm" value="<?php echo $paises_GovernmentForm; ?>" placeholder="<?php _t("GovernmentForm"); ?>"></td> 
 <td><input class="form-control" type="text" name="paises_HeadOfState" value="<?php echo $paises_HeadOfState; ?>" placeholder="<?php _t("HeadOfState"); ?>"></td> 
 <td><input class="form-control" type="text" name="paises_Capital" value="<?php echo $paises_Capital; ?>" placeholder="<?php _t("Capital"); ?>"></td> 
 <td><input class="form-control" type="text" name="paises_code2" value="<?php echo $paises_code2; ?>" placeholder="<?php _t("Code2"); ?>"></td> 
 <td><input class="form-control" type="text" name="paises_prefijo_ruc" value="<?php echo $paises_prefijo_ruc; ?>" placeholder="<?php _t("Prefijo_ruc"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 