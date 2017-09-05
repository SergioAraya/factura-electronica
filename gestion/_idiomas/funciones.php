<?php

/**
<<<<<<< HEAD
 * 
 * @global type $conexion
 * @param type $campo
 * @param type $id
 * @return boolean
 * @package idiomas
 */
=======
  magia_version: 0.0.8
 * */
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
function _idiomas_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM _idiomas WHERE id = $id   ", $conexion) or die("Error: _idiomas_campo()" . mysql_error());
    $reg = mysql_fetch_array($sql);



    if ($reg[$campo]) {
        return $reg[$campo];
    } else {
        return false;
    }
}

<<<<<<< HEAD
/**
 * 
 * @global type $conexion
 * @param type $iso
 * @return boolean
 * @package idiomas
 */
=======
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
function _idiomas_segun_iso($iso) {
    global $conexion;
    $sql = mysql_query(
            "SELECT nombre FROM _idiomas WHERE idioma = '$iso'  ", $conexion) or die("Error: _idiomas_campo()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}

<<<<<<< HEAD
/**
 * 
 * @global type $conexion
 * @param type $campo
 * @param type $label
 * @param type $selecionado
 * @param type $excluir
 * @package idiomas
 */
=======
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
function _idiomas_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion)
            or die("Error:" . mysql_error());
    while ($_idiomas = mysql_fetch_array($sql)) {
        //include "../gestion/_idiomas/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $_idiomas[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $_idiomas[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$_idiomas[$campo]\">$_idiomas[$campo]</option> \n";
    }
}

<<<<<<< HEAD
/**
 * 
 * @global type $conexion
 * @param type $selecionado
 * @param type $excluir
 * @package idiomas
 */
=======
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
function _idiomas_add($selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT * FROM _idiomas WHERE activo = '1'order by orden  ", $conexion) or die("Error:" . mysql_error());
    while ($_idiomas = mysql_fetch_array($sql)) {

        include "../gestion/_idiomas/reg/reg.php";

        echo "<option ";
        if ($selecionado == $_idiomas['idioma']) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $_idiomas['idioma']) {
            echo " disabled ";
        } else {
            echo "";
        }
        //echo "value=\"$_idiomas[0]\">$_idiomas[0]</option>";
        echo "value=\"$_idiomas[idioma]\">$_idiomas[idioma] - $_idiomas[nombre]</option>";
    }
}

<<<<<<< HEAD
/**
 * 
 * @global type $conexion
 * @return boolean
 * @package idiomas
 */
=======
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
function _idiomas_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM _idiomas   ", $conexion) or die("Error: _idiomas_campo()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}
<<<<<<< HEAD

=======
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
/**
 * entrega los idiomas activos
 * @global type $conexion
 * @return array
<<<<<<< HEAD
 * @package idiomas
=======
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
 */
function _idiomas_array() {
    global $conexion;

    $g = array();

    $sql = mysql_query(
            "SELECT idioma FROM _idiomas WHERE activo ='1' ORDER BY orden ", $conexion) or die("Error: _grupos_array()" . mysql_error());

    while ($reg = mysql_fetch_array($sql)) {

        array_push($g, $reg['idioma']);
<<<<<<< HEAD
=======
        
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
    }

    return $g;
}
<<<<<<< HEAD

/**
 * 
 * @return type
 * @package idiomas
 */
=======
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
function _idiomas() {
    return _idiomas_array();
}
