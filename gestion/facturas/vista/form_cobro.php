
<form class="form" action="index.php" method="post"> 
    <input type="hidden" name="p" value="balanza"> 
    <input type="hidden" name="c" value="registrar_pago_desde_factura"> 
    <input type="hidden" name="a" value="registrar"> 
    <input type="hidden" name="balanza_facturas_id" value="<?php echo $facturas_id; ?>"> 






    <div class="form-group"> 
        <label for="balanza_sub_total" class="col-sm-12 control-label"><?php _t("Sub total"); ?></label> 
        <div class="col-sm-12"> 
            <input 
                type="number" 
                class="form-control" 
                name="balanza_sub_total" 
                id="balanza_sub_total" 
                placeholder="<?php _t("Sub total"); ?>" value=""   > 
        </div> 
    </div> 
    
    <div class="form-group"> 
        <label for="balanza_sub_total" class="col-sm-12 control-label "><?php _t("Banco"); ?></label> 
        <div class="col-sm-12"> 
            <select class="form-control" name="balanza_banco">
                <?php bancos_add(); ?>
            </select>
        </div> 
    </div> 

<?php /*
    <div class="form-group"> 
        <label for="balanza_iva" class="col-sm-12 control-label"><?php _t("Iva"); ?></label> 
        <div class="col-sm-12"> 
            <input 
                type="text" 
                class="form-control" 
                name="balanza_iva" 
                id="balanza_iva" placeholder="<?php _t("Iva"); ?>" value=""   > 
        </div> 
    </div> 
*/?>
    
    

    <script>
        $(function () {
            $("#balanza_fecha").datepicker();
        });
    </script>
    <div class="form-group"> 
        <label for="balanza_fecha" class="col-sm-12 control-label"><?php _t("Fecha"); ?></label> 
        <div class="col-sm-10"> 
            <div class="input-group"> 
                <input 
                    type="text" 
                    class="form-control" 
                    name="balanza_fecha" 
                    id="balanza_fecha" 
                    placeholder="<?php _t("aaaa-mm-dd"); ?>" 
                    value="<?php echo date("Y-m-d"); ?>"   > 
                <div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div> 
            </div> 
        </div> 
    </div> 
    
    

    

    <div class="form-group"> 
        <label for="balanza_descripcion" class="col-sm-12 control-label"><?php _t("Descripcion"); ?></label> 
        <div class="col-sm-12"> 
            <input 
                type="text" 
                class="form-control" 
                name="balanza_descripcion" 
                id="balanza_descripcion" 
                placeholder="<?php _t("Descripcion"); ?>" 
                value="<?php _t("Factura");
echo " $facturas_id"; ?>"   > 
        </div> 
    </div> 

    
    <?php 
    /*
    <div class="form-group"> 
        <label for="balanza_ref" class="col-sm-12 control-label"><?php _t("Ref"); ?></label> 
        <div class="col-sm-12"> 
            <input 
                type="text" 
                class="form-control" 
                name="balanza_ref" 
                id="balanza_ref" 
                placeholder="<?php _t("Ref"); ?>" 
                value="<?php echo $facturas_ref; ?>"   
                > 
        </div> 
    </div> 

    
    

    <div class="form-group"> 
        <label for="balanza_ce" class="col-sm-12 control-label"><?php _t("Ce"); ?></label> 
        <div class="col-sm-12"> 
            <input 
                type="text" 
                class="form-control" 
                name="balanza_ce" 
                id="balanza_ce" 
                placeholder="<?php _t("Ce"); ?>" value="<?php echo $facturas_ce; ?>"   
                readonly=""
                > 
        </div> 
    </div> 
*/
    ?>

    

    

    


    <div class="form-group"> 
        <label for="balanza_banco" class="col-sm-12 control-label">&nbsp;</label> 
        <div class="col-sm-12"> 
            <button type="submit" class="btn btn-primary"><?php _t("Registrar"); ?></button> 
        </div> 
    </div> 



    
</form> 
