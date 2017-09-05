<?php

/**
 * Regresa el valor del campo (columna) de la tabal segun su id
 * @global type $conexion
 * @param type $campo
 * @param type $facturas_id
 * @return boolean
 */
function facturas_campo($campo, $facturas_id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM facturas WHERE id = $facturas_id   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);

    if ($reg[$campo]) {
        return $reg[$campo];
    } else {
        return false;
    }
}

/**
 * Crea un grupo de opciones para un select, se puede escojer el campo para el select 
 * @global type $conexion
 * @param type $campo
 * @param type $label
 * @param type $selecionado
 * @param type $excluir
 */
function facturas_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion)
            or error(__DIR__, __FILE__, __LINE__);
    while ($facturas = mysql_fetch_array($sql)) {
        //include "../gestion/facturas/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $facturas[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $facturas[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$facturas[$campo]\">$facturas[$campo]</option> \n";
    }
}

/**
 * Crea las opciones del select de la tabla facturas
 * @global type $conexion
 * @param type $selecionado
 * @param type $excluir
 */
function facturas_add($selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT * FROM facturas  ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    while ($facturas = mysql_fetch_array($sql)) {

        include "../gestion/facturas/reg/reg.php";

        echo "<option ";
        if ($selecionado == $facturas[0]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $facturas[0]) {
            echo " disabled ";
        } else {
            echo "";
        }
        //echo "value=\"$facturas[0]\">$facturas[0]</option>";
        echo "value=\"$facturas[0]\">$facturas[0]</option>";
    }
}

/**
 * Regresa el numero maximo actual de la tabla facturas, usado para saber la proxima factura
 * @global type $conexion
 * @return boolean
 */
function facturas_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM facturas   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}

/**
 * Entrega los campos (COLUMNS) disponibles de la tabla facturas
 * @global type $conexion
 * @return type
 * @example 
 */
function facturas_campos_disponibles() {
    global $conexion;
    $data = array();
    $sql = mysql_query("SHOW COLUMNS FROM facturas  ", $conexion) or error(__DIR__, __FILE__, __LINE__);

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
function facturas_campos_a_mostrar() {
    global $conexion;
    $data = array();
    $sql = mysql_query("SELECT valor FROM _opciones WHERE opcion = 'facturas_thead' ", $conexion) or error(__DIR__, __FILE__, __LINE__);

    $reg = mysql_fetch_array($sql);

    return json_decode($reg[0], true);
}

/**
 * 
 */
function facturas_thead() {
    $campo_disponibles = facturas_campos_disponibles();
    $facturas_campos_a_mostrar = facturas_campos_a_mostrar();
    echo "
     <thead>
        <tr> ";
    echo "<th>" . _tr("#") . "</th> "; // numero de linea
    foreach ($campo_disponibles as $value) {
        if (in_array($value, $facturas_campos_a_mostrar)) {
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
function facturas_tfoot() {
    facturas_thead();
}

/* * **************************************************************************** */

/**
 * Array con los estatus posibles de una factura
 * @return string
 */
function facturas_estatus() {
    $estatus = array(
        "0" => "Registrada",
        "1" => "Cobrada",
        "-1" => "Anulada"
    );

    return $estatus;
}

/**
 * Crea un grupo de opciones para el select
 * <pre>
 * <select>
 * <?php facturas_estatus_add(-1); ?>
 * </select>
 * </pre>
 * Resultado
 * <pre>
 * <select>
 * <option value="0">Registrada</option>
 * <option value="1">Cobrada</option>
 * <option value="-1" selected="" >Anulada</option>
 * </select>
 * </pre>
 * @param type $seleccionado Si le pasamos el codigo del estatus seleccionado, este se pone por defecto en la lista 
 * @param type $excluir Si pasamos el codigo del estatus a excluir, este no esta disponible (disabled) en la lista
 */
function facturas_estatus_add($seleccionado = false, $excluir = false) {
    $estatus = array(
        "0" => "Registrada",
        "10" => "Cobrada",
        "-1" => "Anulada"
    );
    foreach ($estatus as $key => $value) {
        echo "<option value=\"$key\" ";
        if ($seleccionado == $key) {
            echo " selected ";
        }
        if ($excluir == $key) {
            echo " disabled ";
        }
        echo ">$value</option>";
    }
}

/**
 * 
 * @param type $facturas_estatus
 * @return type
 */
function facturas_estatus_segun_codigo($facturas_estatus = false) {
    $estatus = facturas_estatus();

    return $estatus[$facturas_estatus];
}

/**
 * 
 * @global type $conexion
 * @param type $campo
 * @param type $ref
 * @return boolean
 */
function facturas_campo_segun_ref($campo, $ref) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM facturas WHERE ref = '$ref'   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);

    if ($reg[$campo]) {
        return $reg[$campo];
    } else {
        return false;
    }
}

/**
 * 
 * @global type $conexion
 * @param type $id
 * @return boolean
 */
function facturas_cliente_direccion_sobre($id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT * FROM contactos WHERE id = '$id'   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $contactos = mysql_fetch_array($sql);

    if ($contactos[0]) {
        //include "../gestion/clientes/reg/reg.php";
        include "../gestion/facturas/vista/cliente_direccion_sobre.php";
    } else {
        echo "no";
        return false;
    }
}

/**
 * 
 * @global type $conexion
 * @param type $selecionado
 * @param type $excluir
 */
function facturas_por_cobrar_add($selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT * FROM facturas WHERE estatus = '0'  ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    while ($facturas = mysql_fetch_array($sql)) {

        include "../gestion/facturas/reg/reg.php";

        echo "<option ";
        if ($selecionado == $facturas[0]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $facturas[0]) {
            echo " disabled ";
        } else {
            echo "";
        }
        //echo "value=\"$facturas[0]\">$facturas[0]</option>";
        echo "value=\"$facturas[0]\">" . _tr("Factura") . ": $facturas[0] | Cliente Empresa 235.00</option>";
    }
}

function facturas_menu($ubicacion) {
    global $conexion;
    $sql = mysql_query(
            "SELECT * FROM _menu WHERE ubicacion = '$ubicacion' ORDER BY orden  ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    while ($_menu = mysql_fetch_array($sql)) {

        include "../gestion/_menu/reg/reg.php";

        echo '<li role="presentation">';
        echo '<a href="' . $_menu_url . '"><span class="glyphicon glyphicon-' . $_menu_icono . '"></span> ';
        echo _t("Imprimir");
        echo "</a></li>";
    }
}

/**
 * http://php.net/manual/es/function.number-format.php	  
 * http://www.php.net/manual/fr/ref.bc.php
 * http://www.informaticien.be/forum_topic-2564--Generer_une_communication_structuree.html
 * Genera la comunicacion extucturada en las facturas
 * Extructura: [año] [factura] [numeroControl] precedido de ceros hasta completar 12 numeros 
 * ejemplo: 0000 2014 77 97
 *
 * 2 para el digito de control 
 * 3 espacios para el numero de factura 
 * 2 para el ano
 * 5 para la cantidad 99.999 (sin decimales)
 * 12345 12 123 12
 * fomateamos y queda asi 
 * +++123/4512/12312+++	

 * @param type $facturas_id le paso el numero de factura
 * @return type
 */
function facturas_genera_ce($facturas_id) {
    $transactionID = date('Y') . "$facturas_id";
    $control = bcmod($transactionID, 97);
    $control = ($control == "0") ? "97" : $control;
    if ($control < 10) {
        $control = "0" . $control;
    }
    $count = 10 - strlen($transactionID);
    for ($i = 0; $i < $count; $i++) {
        $transactionID = "0" . $transactionID;
    }
    $com = $transactionID . $control;
    return '+++' . substr($com, 0, 3) . "/" . substr($com, 3, 4) . "/" . substr($com, 7, 5) . '+++';
}
