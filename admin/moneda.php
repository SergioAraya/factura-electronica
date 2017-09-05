<?php
<<<<<<< HEAD
/**
 * // para pasar a formato monetario una cantidad dada

 * @link http://php.net/manual/es/function.money-format.php http://php.net/manual/es/function.money-format.php  
 * @global type $config_empresa_moneda_simbolo
 * @param type $cantidad
 * @return type
 */
=======

// para pasar a formato monetario una cantidad dada
// http://php.net/manual/es/function.money-format.php
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
function moneda($cantidad = "0.00") {
    global $config_empresa_moneda_simbolo;
    return number_format($cantidad, 2, ",", ".") . " ";
}
/**
<<<<<<< HEAD
 * Si $cantidad es negativo colorea en rojo
=======
 * Moneda en color rojo si es negativo
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
 * @param type $cantidad
 * @return type
 */
function monedaf($cantidad) {
<<<<<<< HEAD
=======

>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
    if ($cantidad < 0) {
        $r = " <font color=\"red\">". moneda($cantidad)."</font> ";
    }else{
        return $cantidad;
    }

    
}
