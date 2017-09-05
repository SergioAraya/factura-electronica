<?php

<<<<<<< HEAD

/**
 * Recibe horas, minutos y regresa en un formato determinado
 * @package horas
 * @param type $h es un entero entre 0 y 24
 * @param type $m es un entero entre 0 y 86400
 * @return type Resultado sera 17 h 30
 * 
=======
// recibe horas, minutos y regresa en un formato determinado
/**
 * 
 * @param type $h es un entero entre 0 y 24
 * @param type $m es un entero entre 0 y 86400
 * @return type Resultado sera 17 h 30
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
 */
function hora($h, $m) {
    $seg = ($m * 60) + (($h * 60) * 60);
    $horas = (int) ($seg / 3600);
    $min = ($seg % 3600) / 60;
    if ($horas < '10') {
        $horas = "0$horas";
    }
    if ($min < '10') {
        $min = "0$min";
    }

//echo "total de segundos en la funcion: $seg<br>"; 
    return " $horas h $min";
}

########################################################
/* de los 63000 segundos que estan en la BD los convierto en horas y minutos 17h30 */
/**
 * Recibe segundos y lo convierto en formato horas
<<<<<<< HEAD
 * @package horas
=======
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
 * @param type $s
 * @return type
 */
function sacar_hora($s) {
    $horas = (int) ($s / 3600);
// ponemos el cero si tiene un solo digito 
    $min = ($s % 3600) / 60;
//if($min==0){$min="00";}	
    if ($horas < '10') {
        $horas = "0$horas";
    }
    if ($min < '10') {
        $min = "0$min";
    }
//echo "total de segundos en la funcion: $seg<br>"; 
    return $horas . "h" . "$min ";
}

########################################################
/* de los 63000 segundos que estan en la BD los convierto en horas 17 
  para poder anadir al formulario */

function sacar_hora_add($s) {
    $horas = (int) ($s / 3600);
    $min = ($s % 3600) / 60;
//if($min==0){$min="00";}	
    if ($horas < '10') {
        $horas = "0$horas";
    }
    if ($min < '10') {
        $min = "0$min";
    }
//echo "total de segundos en la funcion: $seg<br>";
    return $horas;
}

########################################################
/* de los 63000 segundos que estan en la BD los convierto enminutos 17 
  para poder anadir al formulario */

function sacar_min_add($s) {
    $horas = (int) ($s / 3600);
    $min = ($s % 3600) / 60;
//if($min==0){$min="00";}		
    if ($horas < '10') {
        $horas = "0$horas";
    }
    if ($min < '10') {
        $min = "0$min";
    }
//echo "total de segundos en la funcion: $seg<br>"; 
    return $min;
}

#################################################################

function horas_add($h) {
    $h_s = sacar_hora_add($h);
    for ($i = 0; $i < 24; $i++) {
        echo "<option ";
        if ($i == $h_s) {
            echo " selected=selected ";
        }
        if ($i < '10') {
            $i = "0$i";
        }
        echo " value=\"$i\">$i</option>";
    }
}

<<<<<<< HEAD

/**
 * Opciones de los minutos para un select
 * @param type $m
 */
=======
##################################################################

>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
function min_add($m) {
    $m_s = sacar_min_add($m);
    for ($i = 0; $i < 60; $i = $i + 15) {
        echo "<option ";
        if ($i == $m_s) {
            echo " selected=selected ";
        }
        if ($i < '10') {
            $i = "0$i";
        }
        echo " value=\"$i\">$i</option>";
    }
}

################################################
<<<<<<< HEAD
/**
 * 
 * @param type $segundos
 * @return string
 */
=======

>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
function am_pm($segundos) {
    if ($segundos > 43200) {
        return "PM";
    } else {
        return "AM";
    }
}

?>