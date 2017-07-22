<h1><?php _t("Facturas por cobrar"); ?></h1>




<form class="form-horizontal">
    
    
  <div class="form-group">
    <label for="balanza_id_factura" class="col-sm-2 control-label"><?php _t("Factura"); ?></label>
    <div class="col-sm-10">
        <select class="form-control" name="balanza_id_factura">
            <?php facturas_por_cobrar_add(); ?>
        </select>
      
    </div>
  </div>
    
    
  <div class="form-group">
    <label for="balanza_ref" class="col-sm-2 control-label"><?php _t("Ref"); ?></label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="balanza_ref" name="balanza_ref" placeholder="<?php _t("Alguna referencia?");?>">
    </div>
  </div>
    
  <div class="form-group">
    <label for="balanza_descripcion" class="col-sm-2 control-label"><?php _t("Descripción"); ?></label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="balanza_ref" name="balanza_descripcion" placeholder="<?php _t("Alguna descripción?");?>">
    </div>
  </div>
    
    
  <div class="form-group">
    <label for="balanza_banco" class="col-sm-2 control-label"><?php _t("Banco"); ?></label>
    <div class="col-sm-10">
        <select class="form-control" name="balanza_banco">
            <?php bancos_add(); ?>
        </select>
        
    </div>
  </div>
    
    
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
    
    
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
    
    
</form>