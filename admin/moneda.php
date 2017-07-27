<?php
/**
 * // para pasar a formato monetario una cantidad dada

 * @link http://php.net/manual/es/function.money-format.php http://php.net/manual/es/function.money-format.php  
 * @global type $config_empresa_moneda_simbolo
 * @param type $cantidad
 * @return type
 */
function moneda($cantidad = "0.00") {
    global $config_empresa_moneda_simbolo;
    return number_format($cantidad, 2, ",", ".") . " ";
}
/**
 * Si $cantidad es negativo colorea en rojo
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
