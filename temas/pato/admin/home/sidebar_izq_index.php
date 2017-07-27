<div class="list-group">
  <a href="#" class="list-group-item active">
      <span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span>  
    <?php echo ucfirst($p); ?>
  </a>
  <a href="index.php?p=<?php echo $p; ?>&c=crear" class="list-group-item">
      <span class="glyphicon glyphicon-plus-sign"></span> 
          <?php _t("Nuevo"); ?>
  </a>
</div>


<form method="get" action="index.php">
    <input type="hidden" name="p" value="<?php echo $p; ?>">
    <input type="hidden" name="c" value="buscar">
    <input type="hidden" name="a" value="buscar">
    <div class="form-group">
        <label for="b"><?php _t("Buscar"); ?></label>
        <input type="text" class="form-control" id="b" name="b" placeholder="">
    </div>
    <button type="submit" class="btn btn-default"><?php _t("Buscar"); ?></button>
</form>


