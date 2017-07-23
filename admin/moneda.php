<?php

// para pasar a formato monetario una cantidad dada
// http://php.net/manual/es/function.money-format.php
function moneda($cantidad = "0.00") {
    global $config_empresa_moneda_simbolo;
    return number_format($cantidad, 2, ",", ".") . " ";
}
/**
 * Moneda en color rojo si es negativo
 * @param type $cantidad
 * @return type
 */
function monedaf($cantidad) {

    if ($cantidad < 0) {
        $r = " <font color=\"red\">". moneda($cantidad)."</font> ";
    }else{
        return $cantidad;
    }

    
}
