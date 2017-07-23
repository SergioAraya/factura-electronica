<?php
function dias_transcurridos($fecha_i, $fecha_f) {
    /*
      // Ejemplo de uso:
      echo dias_transcurridos('2012-07-01','2012-07-18');
      // Salida : 17
     */

    $dias = (strtotime($fecha_i) - strtotime($fecha_f)) / 86400;
    $dias = abs($dias);
    $dias = floor($dias);
    return $dias;
}