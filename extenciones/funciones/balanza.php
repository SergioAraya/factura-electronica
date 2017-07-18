<?php 
 /**  
 magia_version: 0.0.11 
 **/
 function balanza_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM balanza WHERE id = $id   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql); 
    
    
    
    if($reg[$campo]){
        return $reg[$campo];
    } else {
        return false;
    }
}
function balanza_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion) 
            or error(__DIR__, __FILE__, __LINE__);
    while ($balanza = mysql_fetch_array($sql)) {
        //include "../gestion/balanza/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $balanza[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $balanza[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$balanza[$campo]\">$balanza[$campo]</option> \n";
    }
}

function balanza_add($selecionado="",$excluir=""){  
global $conexion; 
$sql=mysql_query(
        "SELECT * FROM balanza  ",$conexion) or error(__DIR__, __FILE__, __LINE__);
while ($balanza = mysql_fetch_array($sql)) {
    
        include "../gestion/balanza/reg/reg.php"; 
    
   echo "<option "; 
   if($selecionado==$balanza[0]) {echo " selected "; } else {echo ""; }
   if($excluir==$balanza[0] ) {echo " disabled "; } else {echo ""; }
   //echo "value=\"$balanza[0]\">$balanza[0]</option>";
   echo "value=\"$balanza[0]\">$balanza_balanza</option>";
} 
}
/**/
function balanza_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM balanza   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}


function balanza_campos_disponibles(){
     global $conexion;
    $data = array();
     $sql = mysql_query( "SHOW COLUMNS FROM balanza  ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    
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
function balanza_campos_a_mostrar(){
     global $conexion;
    $data = array();
     $sql = mysql_query( "SELECT valor FROM _opciones WHERE opcion = 'balanza_thead' ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    
    $reg = mysql_fetch_array($sql);
    
    return json_decode($reg[0],true);
}

function balanza_thead(){    
    $campo_disponibles = balanza_campos_disponibles();   
    $balanza_campos_a_mostrar = balanza_campos_a_mostrar();        
    echo "
     <thead>
        <tr> ";
    echo "<th>"._tr("#")."</th> "; // numero de linea
    foreach ($campo_disponibles as $value) {        
        if(in_array($value, $balanza_campos_a_mostrar)){
            echo "<th>"._tr($value)."</th> "; 
        }        
    }
    echo "<th>"._tr("Acción")."</th> "; // accion             
    echo "    </tr>
    </thead>"; 
}
/**
 * 
 */
function balanza_tfoot(){    
   balanza_thead();
}


