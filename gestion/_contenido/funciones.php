<?php
/**
 * 
 * @global type $conexion
 * @param type $campo
 * @param type $id
 * @return boolean
 * @package contenido
 */
function _contenido_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM _contenido WHERE id = $id   ", $conexion) or die("Error: _contenido_campo()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[$campo]) {
        return $reg[$campo];
    } else {
        return false;
    }
}
/**
 * Entrega los valores de la columna $campo de la tabla _menu para inputs para un select 
 * @Ejemplo
 * <pre>
 * <select>
* <?php _contenido_campo_add(); ?>
 * <select>
 * </pre>
 * @Resultado
 * 
 * @global type $conexion
 * @param type $campo
 * @param type $label
 * @param type $selecionado
 * @param type $excluir
 * @package contenido_select
 */
function _contenido_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion)
            or die("Error:" . mysql_error());
    while ($_contenido = mysql_fetch_array($sql)) {
        //include "../gestion/_contenido/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $_contenido[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $_contenido[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$_contenido[$campo]\">$_contenido[$campo]</option> \n";
    }
}
/**
 * 
 * @global type $conexion
 * @param type $selecionado
 * @param type $excluir
 * @package contenido_select
 */
function _contenido_add($selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT * FROM _contenido order by frase  ", $conexion) or die("Error:" . mysql_error());
    while ($_contenido = mysql_fetch_array($sql)) {

        include "../gestion/_contenido/reg/reg.php";

        echo "<option ";
        if ($selecionado == $_contenido['frase']) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $_contenido['frase']) {
            echo " disabled ";
        } else {
            echo "";
        }
        //echo "value=\"$_contenido[0]\">$_contenido[0]</option>";
        echo "value=\"$_contenido[frase]\">$_contenido[frase]</option>";
    }
}
/**
 * 
 * @global type $conexion
 * @return boolean
 * @package contenido
 */
function _contenido_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM _contenido   ", $conexion) or die("Error: _contenido_campo()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}
