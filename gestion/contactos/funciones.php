<?php

/**
<<<<<<< HEAD
 * Valor del $campo segun el $id de contacto
 * @descripcion
 * Si queremos tener la ciudad del contacto 10 podemos hacer lo siguiente
 * @Ejemplo
 * 
 * <code>
 * $ciudad = contactos_campo("ciudad",10);
 * </code>
 * 
 * @Resultado 
 * 
 * <code>
 * Quito
 * </code>
 * @global type $conexion
 * @param type $campo El nombre del campo que existe en la base de datos 'contactos'
 * @param type $id El identificador del contacto
 * @return boolean Regresa el valor del campo si este es encontrado, sino regresa false
 * @package contactos
 * @sql SELECT $campo FROM contactos WHERE id = $id 
 */
=======
  magia_version: 0.0.8
 * */
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
function contactos_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM contactos WHERE id = $id   ", $conexion) or die("Error: contactos_campo()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[$campo]) {
        return $reg[$campo];
    } else {
        return false;
    }
}

<<<<<<< HEAD
/**
 * Select de contactos segun una columna ($campo)
 *  
 * @Ejemplo
 * <code>
 * <select name="cpostal">
 * <?php contactos_campo_add('cpostal',false, 1040, array("1000","1010")); ?>
 * </select>
 * </code>
 * @Resultado 
 * <code>
 * <select name="cpostal">
 * <option value="1000" disabled>1000</option> 
 * <option value="1010" disabled>1010</option> 
 * <option value="1020">1020</option> 
 * <option value="1030">1030</option> 
 * <option value="1040" selected>1040</option> 
 * <option value="1050">1050</option> 
 * <option value="1060">1060</option> 
 * </select>
 * </code>
 * 
 * @global type $conexion
 * @param type $campo Nombre del campo de la tabla contactos, el cual se usara como value del input
 * @param type $label Sin uso por el momento 
 * @param type $selecionado Un solo valor el cual sera selecionado por defecto
 * @param type $excluir Mando un array de valores los cuales van a estar inactivos, debe corresponder al mismo tipo $campo
 * @package contactos_select
 * @sql SELECT DISTINCT $campo FROM contactos order by $campo 
 * 
 */
function contactos_campo_add($campo, $label, $selecionado = "", $excluir = array()) {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM contactos order by $campo   ", $conexion)
            or die("Error:" . mysql_error());
    while ($contactos = mysql_fetch_array($sql)) {
        //include "../gestion/contactos/reg/reg.php"; 
        echo "<option ";
        if ($selecionado == $contactos[$campo]) {
            echo " selected ";
        }
        if (in_array($contactos[$campo], $excluir)) {
            echo " disabled ";
=======
function contactos_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion)
            or die("Error:" . mysql_error());
    while ($contactos = mysql_fetch_array($sql)) {
        //include "../gestion/contactos/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $contactos[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $contactos[$campo]) {
            echo " disabled ";
        } else {
            echo "";
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
        }
        echo "value=\"$contactos[$campo]\">$contactos[$campo]</option> \n";
    }
}

<<<<<<< HEAD
/**
 * Select de contactos
 * @descripcion
 * Se hace un filtro para saber si el usuario conectado puede ver o no los usuarios que no le pertenecen
 * @global type $conexion
 * @global type $_usuarios_usuario Email del usuario coenctado
 * @global type $_usuarios_grupo Grupo del usuario conectado
 * @param type $selecionado El id a ser serleccionado por defecto
 * @param type $excluir Uno o varios ids a ser desactivados
 * @package contactos_select
 * @todo Separar el filtro segun grupo 
 * @sql Puede crear otros SELECT * FROM contactos ORDER BY estatus DESC, empresa
 * @sql No puede SELECT * FROM contactos WHERE email = '$_usuarios_usuario' 
 */
function contactos_add($selecionado = "", $excluir = array()) {
=======
function contactos_add($selecionado = "", $excluir = "") {
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
    global $conexion, $_usuarios_usuario, $_usuarios_grupo;

    // grupo segun usuario 
    // si ese grupo puede crear pedidos_otros 
    if (permisos_tiene_permiso('crear', 'pedidos_otros', $_usuarios_grupo)) {
        $sql = mysql_query("SELECT * FROM contactos ORDER BY estatus DESC, empresa ", $conexion);
    } else {
        $sql = mysql_query("SELECT * FROM contactos WHERE email = '$_usuarios_usuario' ", $conexion);
    }
    // sino 

    while ($contactos = mysql_fetch_array($sql)) {

        include "../gestion/contactos/reg/reg.php";

        echo "<option ";
<<<<<<< HEAD
        if ($selecionado == $contactos['id']) {
=======
        if ($selecionado == $contactos['email']) {
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
            echo " selected ";
        } else {
            echo "";
        }
<<<<<<< HEAD


=======
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
        if ($excluir == $contactos[0] || $contactos['estatus'] == 0) {
            echo " disabled ";
        } else {
            echo "";
        }
<<<<<<< HEAD

        if (in_array($contactos['id'], $excluir)) {
            echo " disabled ";
        }


=======
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
        //echo "value=\"$contactos[0]\">$contactos[0]</option>";
        echo "value=\"$contactos[0]\">" . strtoupper($contactos['empresa']) . " - $contactos[contacto] ($contactos[email])</option>";
    }
}

<<<<<<< HEAD
/**
 * Select de contactos que no tienen login
 * @sql SELECT * FROM contactos 
 * @package contactos_select
 *  
 * @global type $conexion
 * @param type $selecionado Id de contacto a seleccionar por defecto
 * @param type $excluir array() de ids a excluir
 * @uses contactos_tiene_login 
 */
function contactos_sin_usuario_add($selecionado = "", $excluir = array()) {
    global $conexion;
    $sql = mysql_query(
            "SELECT * FROM contactos  ", $conexion) or die("Error: contactos_sin_usuario_add()" . mysql_error());
=======
function contactos_sin_usuario_add($selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT * FROM contactos  ", $conexion) or die("Error:" . mysql_error());
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
    while ($contactos = mysql_fetch_array($sql)) {
        include "../gestion/contactos/reg/reg.php";

        if (!contactos_tiene_login($contactos['email']) && $contactos['email']) {
<<<<<<< HEAD
            echo "<option value=\"$contactos[id]\" ";
            if (in_array($contactos['id'], $excluir)) {
                echo " disabled ";
            }
            echo ">$contactos[empresa] - $contactos[contacto] - $contactos[email]</option>";
=======
            echo "<option value=\"$contactos[email]\">$contactos[empresa] - $contactos[contacto] - $contactos[email]</option>";
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
        } // fi tiene login 
    }
}

<<<<<<< HEAD
/**
 * Entrega el valor max de la columna 'id' de la tabla 'contactos' 
 * @package contactos
 * @sql SELECT MAX(id) FROM contactos  
 * @global type $conexion
 * @return boolean

 */
function contactos_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM contactos   ", $conexion) or die("Error: contactos_numero_actual()" . mysql_error());
=======
function contactos_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM contactos   ", $conexion) or die("Error: contactos_campo()" . mysql_error());
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}

/**
 * Verifica si el email del contacto esta presente en la tabla de _usuarios; si es asi me entrega su id
 * sino me entrega falso
 * @global type $conexion
 * @param type $campo
 * @param type $id
 * @return boolean
<<<<<<< HEAD
 * @package contactos
 * @sql SELECT id FROM _usuarios WHERE usuario = '$email' 
=======
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
 */
function contactos_tiene_login($email) {
    global $conexion;
    $sql = mysql_query(
            "SELECT id FROM _usuarios WHERE usuario = '$email'   ", $conexion)
            or die("Error: contactos_tiene_login()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}

<<<<<<< HEAD
/**
 * Busca cualquier valor ($campo) de la tabla contactos que corresponda a un email dado  
 * @Ejemplo
 * <pre>
 * $ciudad = contactos_campo_segun_email("ciudad",'info@mail.com');
 * </pre>
 * @Resultado
 * <code>Quito</code>
 * @global type $conexion
 * @param type $campo Valor que se busca en la tabla contactos
 * @param type $email Email del contacto
 * @return boolean Entrega el valor buscado o falso no lo encuentra
 * @see contactos_campo
 * @link http://github.com/robincoello/magia_php Magia
 * @author Robinson <robincoello@hotmail.com>
 * @package contactos
 * @category contactos
 * @name $conexion
 * @sql <pre>SELECT $campo FROM contactos WHERE email = '$email' </pre>

 */
=======
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
function contactos_campo_segun_email($campo, $email) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM contactos WHERE email = '$email'   ", $conexion)
            or die("Error: contactos_campo_segun_email()" . mysql_error());
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
 * @param type $orden
 * @package contactos
 * @uses
 */
=======
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
function contactos_tabla_index_titulo($orden) {

    $columnas_disponibles = array(
        "ciudad",
        "email",
        "idioma",
        "grupo",
        "acción"
    );

    if (strtoupper($orden) == "ASC") {
        $ad = "DESC";
        $icono = '<span class="glyphicon glyphicon-triangle-bottom"><span>';
    } else {
        $ad = "ASC";
        $icono = '<span class="glyphicon glyphicon-triangle-top"><span>';
    }

    echo "      
                <th><a href=\"index.php?p=contactos&c=index&ordenpor=empresa&orden=$ad\">" . _tr("Empresa") . "</a> $icono</th> 
                <th><a href=\"index.php?p=contactos&c=index&ordenpor=contacto&orden=$ad\">" . _tr("Contacto") . "</a> $icono</th>";

    // echo "<th><span class=\"glyphicon glyphicon-" . _menu_icono_segun_pagina('pedidos') . " \"></span></th>";

    foreach ($columnas_disponibles as $value) {

        echo '<th> ' . _tr(ucfirst($value)) . '</th> ';
    }
}

<<<<<<< HEAD
/**
 * Total contactos segun el $estatus dado
 * @global type $conexion
 * @sql <pre>SELECT COUNT(id) FROM contactos WHERE estatus = '$estatus'</pre>
 * @param type $estatus Estatus del contacto buscado (numerico)
 * @return boolean Entrega el total o cero 
 * @package contactos_totales
 */
=======
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
function contactos_total_segun_estatus($estatus) {
    global $conexion;
    $sql = mysql_query(
            "SELECT COUNT(id) FROM contactos WHERE estatus = '$estatus'   ", $conexion) or die("Error: contactos_total_segun_estatus()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
<<<<<<< HEAD
        return 0;
=======
        return false;
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
    }
}

/**
<<<<<<< HEAD

 * Entrega el idioma del usuario, si no tiene entrega el idioma por defecto del sistema
 * @package contactos 
 * @global type $config_idioma El idioma por defecto en el sistema
 * @param type $id Identificador del contacto
 * @return type Entrega el idioma del usuario es_ES
 */
function contactos_idioma($id) {
    global $config_idioma;
    return (
            contactos_campo('idioma', $id)) ?
            contactos_campo('idioma', $id) :
            $config_idioma
    ;
=======
 * Entrega el idioma del usuario, si no tiene entrega el idioma por defecto del sistema
 * @global type $conexion
 * @return boolean
 */
function contactos_idioma($email) {
    global $config_idioma;
    return (contactos_campo_segun_email('idioma', $email)) ? contactos_campo_segun_email('idioma', $email) : $config_idioma;
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
}
