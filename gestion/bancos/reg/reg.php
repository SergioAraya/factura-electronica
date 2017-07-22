<?php

/**
  magia_version: 0.0.11
 * */
$bancos_id = $bancos['id'];
$bancos_banco = $bancos['banco'];
$bancos_cuenta = $bancos['cuenta'];
$bancos_iban = $bancos['iban'];
$bancos_orden = $bancos['orden'];
$bancos_estatus = $bancos['estatus'];
$bancos_estatus_0 = "";
$bancos_estatus_1 = "";
if ($bancos_estatus == 0) {
    $bancos_estatus_0 = " checked ";
    $bancos_estatus_1 = "";
} else {
    $bancos_estatus_0 = "";
    $bancos_estatus_1 = "checked";
}  
