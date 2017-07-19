<?php include "menu_top.php"; ?>

<div class="row">
    <div class="col-sm-8"><?php include "detalles.php"; ?></div>
    <div class="col-sm-4"><?php include "der.php"; ?></div>
</div>






<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#form_cobro">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="form_cobro" tabindex="-1" role="dialog" aria-labelledby="form_cobro">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <?php //include "form_cobro.php"; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

