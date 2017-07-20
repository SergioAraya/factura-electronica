<?php

/**
  magia_version: 0.0.11
 * */
function factura_items_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM factura_items WHERE id = '$id'   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);



    if ($reg[$campo]) {
        return $reg[$campo];
    } else {
        return false;
    }
}

function factura_items_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion)
            or error(__DIR__, __FILE__, __LINE__);
    while ($factura_items = mysql_fetch_array($sql)) {
        //include "../gestion/factura_items/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $factura_items[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $factura_items[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$factura_items[$campo]\">$factura_items[$campo]</option> \n";
    }
}

function factura_items_add($selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT * FROM factura_items  ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    while ($factura_items = mysql_fetch_array($sql)) {

        include "../gestion/factura_items/reg/reg.php";

        echo "<option ";
        if ($selecionado == $factura_items[0]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $factura_items[0]) {
            echo " disabled ";
        } else {
            echo "";
        }
        //echo "value=\"$factura_items[0]\">$factura_items[0]</option>";
        echo "value=\"$factura_items[0]\">$factura_items_factura_items</option>";
    }
}

/**/

function factura_items_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM factura_items   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}

function factura_items_campos_disponibles() {
    global $conexion;
    $data = array();
    $sql = mysql_query("SHOW COLUMNS FROM factura_items  ", $conexion) or error(__DIR__, __FILE__, __LINE__);

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
function factura_items_campos_a_mostrar() {
    global $conexion;
    $data = array();
    $sql = mysql_query("SELECT valor FROM _opciones WHERE opcion = 'factura_items_thead' ", $conexion) or error(__DIR__, __FILE__, __LINE__);

    $reg = mysql_fetch_array($sql);

    return json_decode($reg[0], true);
}

function factura_items_thead() {
    $campo_disponibles = factura_items_campos_disponibles();
    $factura_items_campos_a_mostrar = factura_items_campos_a_mostrar();
    echo "
     <thead>
        <tr> ";
    echo "<th>" . _tr("#") . "</th> "; // numero de linea
    foreach ($campo_disponibles as $value) {
        if (in_array($value, $factura_items_campos_a_mostrar)) {
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
function factura_items_tfoot() {
    factura_items_thead();
}
/********************************************************************************/
/********************************************************************************/
/********************************************************************************/
/********************************************************************************/
/********************************************************************************/


function factura_items_detalles($facturas_ref) {
    global $conexion;
    $sql = mysql_query(
            "SELECT *, (cantidad*valor)*(1+porcentaje_iva/100) as totaltvac FROM factura_items WHERE ref_factura = '$facturas_ref' ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    while ($factura_items = mysql_fetch_array($sql)) {
        include "../gestion/factura_items/reg/reg.php";
        include "../gestion/factura_items/vista/items_detalles.php";


    }
}

function factura_items_editar($facturas_ref) {
    global $conexion;
    $sql = mysql_query(
            "SELECT
            *, 
            (cantidad*valor)*(1+porcentaje_iva/100) as totaltvac
            
            
            FROM factura_items 
            WHERE ref_factura = '$facturas_ref' ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    
    
    while ($factura_items = mysql_fetch_array($sql)) {
        include "../gestion/factura_items/reg/reg.php";
        include "../gestion/factura_items/vista/items_editar.php";


    }
}
function factura_items_totalgiva($facturas_ref) {
    global $conexion;
    $sql = mysql_query(
            "SELECT sum((cantidad*valor)*(porcentaje_iva/100)) as totalgiva FROM factura_items WHERE ref_factura = '$facturas_ref' ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);    
    return $reg['totalgiva'];    
}

function factura_items_totalghtva($facturas_ref) {
    global $conexion;
    $sql = mysql_query(
            "SELECT sum((cantidad*valor))  as totalhtva FROM factura_items WHERE ref_factura = '$facturas_ref' ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);    
    return $reg['totalhtva'];    
}
function factura_items_totalgtvac($facturas_ref) {
    global $conexion;
    $sql = mysql_query(
            "SELECT sum((cantidad*valor)*(1+(porcentaje_iva/100))) as totaltvac FROM factura_items WHERE ref_factura = '$facturas_ref' ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);    
    return $reg['totaltvac'];    
}
