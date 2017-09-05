<?php
<<<<<<< HEAD

/**
 * Regresa la cantidad de dias entre dos fechas
 * @package fechas
 * @Ejemplo
 * echo dias_transcurridos('2012-07-01','2012-07-18');
 * @resultado
 * 17
 * @param type $fecha_i
 * @param type $fecha_f
 * @return type
 */
function fechas_dias_transcurridos($fecha_i, $fecha_f) {
=======
function dias_transcurridos($fecha_i, $fecha_f) {
    /*
      // Ejemplo de uso:
      echo dias_transcurridos('2012-07-01','2012-07-18');
      // Salida : 17
     */

>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
    $dias = (strtotime($fecha_i) - strtotime($fecha_f)) / 86400;
    $dias = abs($dias);
    $dias = floor($dias);
    return $dias;
<<<<<<< HEAD
}

/**
 * Le paso dos fechas y entrego la suma de las dos en el formato de la $fecha1
 * @package fechas
 * @link http://php.net/manual/es/datetime.diff.php http://php.net/manual/es/datetime.diff.php
 * @param type $fecha1 Fecha de inicio
 * @param type $fecha2 A sumar a la fecha2
 */
function fechas_sumar($fecha1, $fecha2) {
    $datetime1 = date_create($fecha1);
    $datetime2 = date_create($fecha2);
    $interval = date_diff($datetime1, $datetime2);
    return $interval->format('%R%a');
    //echo $interval->format('%R%a días');
}

/**
 * Al la $fecha le resto $menosFecha
 * @package fechas
 * @param type $fecha
 * @param type $menosFecha
 * @return type Regresa una fecha
 */
function fechas_restar($fecha, $menosFecha) {
    return $fechaRestada;
}
=======
}
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
