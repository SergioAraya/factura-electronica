<?php

/**
  magia_version: 0.0.11
 * */
function presupuestos_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM presupuestos WHERE id = $id   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);



    if ($reg[$campo]) {
        return $reg[$campo];
    } else {
        return false;
    }
}

function presupuestos_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion)
            or error(__DIR__, __FILE__, __LINE__);
    while ($presupuestos = mysql_fetch_array($sql)) {
        //include "../gestion/presupuestos/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $presupuestos[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $presupuestos[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$presupuestos[$campo]\">$presupuestos[$campo]</option> \n";
    }
}

function presupuestos_add($selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT * FROM presupuestos  ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    while ($presupuestos = mysql_fetch_array($sql)) {

        include "../gestion/presupuestos/reg/reg.php";

        echo "<option ";
        if ($selecionado == $presupuestos[0]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $presupuestos[0]) {
            echo " disabled ";
        } else {
            echo "";
        }
        //echo "value=\"$presupuestos[0]\">$presupuestos[0]</option>";
        echo "value=\"$presupuestos[0]\">$presupuestos[0] | $presupuestos[fecha_registro]</option>";
    }
}

/**/

function presupuestos_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM presupuestos   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}

function presupuestos_campos_disponibles() {
    global $conexion;
    $data = array();
    $sql = mysql_query("SHOW COLUMNS FROM presupuestos  ", $conexion) or error(__DIR__, __FILE__, __LINE__);

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
function presupuestos_campos_a_mostrar() {
    global $conexion;
    $data = array();
    $sql = mysql_query("SELECT valor FROM _opciones WHERE opcion = 'presupuestos_thead' ", $conexion) or error(__DIR__, __FILE__, __LINE__);

    $reg = mysql_fetch_array($sql);

    return json_decode($reg[0], true);
}

function presupuestos_thead() {
    $campo_disponibles = presupuestos_campos_disponibles();
    $presupuestos_campos_a_mostrar = presupuestos_campos_a_mostrar();
    echo "
     <thead>
        <tr> ";
    echo "<th>" . _tr("#") . "</th> "; // numero de linea
    foreach ($campo_disponibles as $value) {
        if (in_array($value, $presupuestos_campos_a_mostrar)) {
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
function presupuestos_tfoot() {
    presupuestos_thead();
}
