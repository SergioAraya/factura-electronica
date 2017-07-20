<?php

/**
  magia_version: 0.0.11
 * */
function bancos_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM bancos WHERE id = $id   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);



    if ($reg[$campo]) {
        return $reg[$campo];
    } else {
        return false;
    }
}

function bancos_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion)
            or error(__DIR__, __FILE__, __LINE__);
    while ($bancos = mysql_fetch_array($sql)) {
        //include "../gestion/bancos/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $bancos[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $bancos[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$bancos[$campo]\">$bancos[$campo]</option> \n";
    }
}

function bancos_add($selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT * FROM bancos  ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    while ($bancos = mysql_fetch_array($sql)) {

        include "../gestion/bancos/reg/reg.php";

        echo "<option ";
        if ($selecionado == $bancos[0]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $bancos[0]) {
            echo " disabled ";
        } else {
            echo "";
        }
        //echo "value=\"$bancos[0]\">$bancos[0]</option>";
        echo "value=\"$bancos[cuenta]\">$bancos_banco $bancos[cuenta]</option>";
    }
}

/**/

function bancos_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM bancos   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}

function bancos_campos_disponibles() {
    global $conexion;
    $data = array();
    $sql = mysql_query("SHOW COLUMNS FROM bancos  ", $conexion) or error(__DIR__, __FILE__, __LINE__);

    while ($reg = mysql_fetch_array($sql)) {
        $data[$reg[0]] = $reg[0];
    }

    return $data;
}

/**
 * Son los campos que se debe mostrar en la tabla del index
 * @global type $conexion
 * @return type
 */
function bancos_campos_a_mostrar() {
    global $conexion;
    $data = array();
    $sql = mysql_query("SELECT valor FROM _opciones WHERE opcion = 'bancos_thead' ", $conexion) or error(__DIR__, __FILE__, __LINE__);

    $reg = mysql_fetch_array($sql);

    return json_decode($reg[0], true);
}

function bancos_thead() {
    $campo_disponibles = bancos_campos_disponibles();
    $bancos_campos_a_mostrar = bancos_campos_a_mostrar();
    echo "
     <thead>
        <tr> ";
    echo "<th>" . _tr("#") . "</th> "; // numero de linea
    foreach ($campo_disponibles as $value) {
        if (in_array($value, $bancos_campos_a_mostrar)) {
            echo "<th>" . _tr($value) . "</th> ";
        }
    }
    echo "<th>" . _tr("Acción") . "</th> "; // accion             
    echo "    </tr>
    </thead>";
}

/**
 * 
 */
function bancos_tfoot() {
    bancos_thead();
}
