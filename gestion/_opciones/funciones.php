<?php
<<<<<<< HEAD
/**
 * 
 * @global type $conexion
 * @param type $campo
 * @param type $id
 * @return boolean
 * @package opciones
 */
=======

/**
  magia_version: 0.0.8
 * */
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
function _opciones_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM _opciones WHERE id = $id   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
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
 * @param type $campo
 * @param type $label
 * @param type $selecionado
 * @param type $excluir
 * @package opciones
 */
=======
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
function _opciones_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion)
            or error(__DIR__, __FILE__, __LINE__);
    while ($_opciones = mysql_fetch_array($sql)) {
        //include "../gestion/_opciones/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $_opciones[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $_opciones[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$_opciones[$campo]\">$_opciones[$campo]</option> \n";
    }
}
<<<<<<< HEAD
/**
 * 
 * @global type $conexion
 * @param type $selecionado
 * @param type $excluir
 * @package opciones
 */
=======

>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
function _opciones_add($selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT * FROM _opciones  ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    while ($_opciones = mysql_fetch_array($sql)) {

        include "../gestion/_opciones/reg/reg.php";

        echo "<option ";
        if ($selecionado == $_opciones[0]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $_opciones[0]) {
            echo " disabled ";
        } else {
            echo "";
        }
        //echo "value=\"$_opciones[0]\">$_opciones[0]</option>";
        echo "value=\"$_opciones[0]\">$_opciones__opciones</option>";
    }
}

<<<<<<< HEAD
/**
 * 
 * @global type $conexion
 * @return boolean
 * @package opciones
 */
=======
/**/
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42

function _opciones_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM _opciones   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
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
 * @return type
 * @package opciones
 * @uses _opciones_thead Para mostrar los campos
 */
=======

>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
function _opciones_campos_disponibles() {
    global $conexion;
    $data = array();
    $sql = mysql_query("SHOW COLUMNS FROM _opciones  ", $conexion) or error(__DIR__, __FILE__, __LINE__);

    while ($reg = mysql_fetch_array($sql)) {
        $data[$reg[0]] = $reg[0];
    }

    return $data;
}

/**
<<<<<<< HEAD
  * Son los campos que se debe mostrar en la tabla del index
 * @global type $conexion
 * @return type
 * @package opciones
 * @uses _opciones_thead Description _opciones_thead Usa para determianr que campos debe mostrarse
=======
 * Son los campos que se debe mostrar en la tabla del index
 * @global type $conexion
 * @return type
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
 */
function _opciones_campos_a_mostrar() {
    global $conexion;
    $data = array();
    $sql = mysql_query("SELECT valor FROM _opciones WHERE opcion = '_opciones_thead' ", $conexion) or error(__DIR__, __FILE__, __LINE__);

    $reg = mysql_fetch_array($sql);

    return json_decode($reg[0], true);
}
<<<<<<< HEAD
/**
 * @package opciones
 * 
 */
=======

>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
function _opciones_thead() {
    $campo_disponibles = _opciones_campos_disponibles();
    $_opciones_campos_a_mostrar = _opciones_campos_a_mostrar();
    echo "
     <thead>
        <tr> ";
    echo "<th>" . _tr("#") . "</th> "; // numero de linea
    foreach ($campo_disponibles as $value) {
        if (in_array($value, $_opciones_campos_a_mostrar)) {
            echo "<th>" . _tr($value) . "</th> ";
        }
    }
    echo "<th>" . _tr("Acción") . "</th> "; // accion             
    echo "    </tr>
    </thead>";
}

/**
<<<<<<< HEAD
 * @package opciones
=======
 * 
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
 */
function _opciones_tfoot() {
    _opciones_thead();
}

/****************************/
/****************************/
/****************************/
/****************************/
function _opciones_valor_segun_opcion($opcion) {
    global $conexion;
    
    $sql = mysql_query(
            "SELECT valor FROM _opciones WHERE opcion = '$opcion'   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}