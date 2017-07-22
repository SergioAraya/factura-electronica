<div class="list-group">
  <a href="#" class="list-group-item disabled">
    <?php _t("Estatus"); ?>: <?php //_t(facturas_estatus($facturas_estatus)); ?>
  </a>
  <a href="#" class="list-group-item"><?php _t("Fecha"); ?>: <?php echo $facturas_fecha_registro; ?></a>
  <a href="index.php?p=presupuestos&c=ver&presupuestos_id=<?php echo $facturas_id_presupuesto; ?>" class="list-group-item"><?php _t("Presupuesto"); ?>: <?php echo $facturas_id_presupuesto; ?></a>
  <a href="#" class="list-group-item"><?php _t("Nota de crédito"); ?>: <?php echo $facturas_id_notac; ?></a>
</div>






<div class="panel panel-default">
  <div class="panel-heading">
      <span class="glyphicon glyphicon-shopping-cart"></span>
      <?php _t("Registo de cobros"); ?></div>
  <div class="panel-body">
<?php include "registro_pagos.php"; ?>
  </div>
</div>





<div class="panel panel-default">
  <div class="panel-heading">
      <span class="glyphicon glyphicon-shopping-cart"></span>
      <?php _t("Registrar pagos"); ?></div>
  <div class="panel-body">
    <?php 
    if($facturas_estatus !="-1"){
        include "form_cobro.php";
    }else{
        mensaje('info', 'No se puede registrar pagos en una factura anulada');
    }
     ?>
  </div>
</div>
