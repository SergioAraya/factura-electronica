<?php

/**
  magia_version: 0.0.11
 * */
//$facturas_id = mysql_real_escape_string($_POST['facturas_id']); 
$facturas_ref = (isset($_POST['facturas_ref'])) ? mysql_real_escape_string($_POST['facturas_ref']) : null;
$facturas_id_presupuesto = (isset($_POST['facturas_id_presupuesto'])) ? mysql_real_escape_string($_POST['facturas_id_presupuesto']) : null;
$facturas_id_notac = (isset($_POST['facturas_id_notac'])) ? mysql_real_escape_string($_POST['facturas_id_notac']) : null;
$facturas_id_contacto = (isset($_POST['facturas_id_contacto'])) ? mysql_real_escape_string($_POST['facturas_id_contacto']) : null;
#    $facturas_fecha_registro = (isset($_POST['facturas_fecha_registro']))?mysql_real_escape_string($_POST['facturas_fecha_registro']):CURRENT_TIMESTAMP;   
$facturas_sub_total = (isset($_POST['facturas_sub_total'])) ? mysql_real_escape_string($_POST['facturas_sub_total']) : 0.00000;
$facturas_iva = (isset($_POST['facturas_iva'])) ? mysql_real_escape_string($_POST['facturas_iva']) : 0.00000;
$facturas_anticipo = (isset($_POST['facturas_anticipo'])) ? mysql_real_escape_string($_POST['facturas_anticipo']) : 0.00000;
$facturas_saldo = (isset($_POST['facturas_saldo'])) ? mysql_real_escape_string($_POST['facturas_saldo']) : 0.00000;
$facturas_comentarios = (isset($_POST['facturas_comentarios'])) ? mysql_real_escape_string($_POST['facturas_comentarios']) : null;
$facturas_r1 = (isset($_POST['facturas_r1'])) ? mysql_real_escape_string($_POST['facturas_r1']) : null;
$facturas_r2 = (isset($_POST['facturas_r2'])) ? mysql_real_escape_string($_POST['facturas_r2']) : null;
$facturas_r3 = (isset($_POST['facturas_r3'])) ? mysql_real_escape_string($_POST['facturas_r3']) : null;
$facturas_fecha_cobro = (isset($_POST['facturas_fecha_cobro'])) ? mysql_real_escape_string($_POST['facturas_fecha_cobro']) : null;
$facturas_expira = (isset($_POST['facturas_expira'])) ? mysql_real_escape_string($_POST['facturas_expira']) : 0;
$facturas_ce = (isset($_POST['facturas_ce'])) ? mysql_real_escape_string($_POST['facturas_ce']) : null;
$facturas_estatus = (isset($_POST['facturas_estatus'])) ? mysql_real_escape_string($_POST['facturas_estatus']) : 0;

if ($config_debug) {
    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";
    echo "<table border>";
    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
    foreach ($_POST as $key => $value) {
        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
    }
    echo "</table>";
}