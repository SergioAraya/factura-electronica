<?php 
 /**  
 magia_version: 0.0.11 
 **/
 function notac_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM notac WHERE id = $id   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql); 
    
    
    
    if($reg[$campo]){
        return $reg[$campo];
    } else {
        return false;
    }
}
function notac_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion) 
            or error(__DIR__, __FILE__, __LINE__);
    while ($notac = mysql_fetch_array($sql)) {
        //include "../gestion/notac/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $notac[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $notac[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$notac[$campo]\">$notac[$campo]</option> \n";
    }
}

function notac_add($selecionado="",$excluir=""){  
global $conexion; 
$sql=mysql_query(
        "SELECT * FROM notac  ",$conexion) or error(__DIR__, __FILE__, __LINE__);
while ($notac = mysql_fetch_array($sql)) {
    
        include "../gestion/notac/reg/reg.php"; 
    
   echo "<option "; 
   if($selecionado==$notac[0]) {echo " selected "; } else {echo ""; }
   if($excluir==$notac[0] ) {echo " disabled "; } else {echo ""; }
   //echo "value=\"$notac[0]\">$notac[0]</option>";
   echo "value=\"$notac[0]\">$notac[0]</option>";
} 
}
/**/
function notac_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM notac   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}


function notac_campos_disponibles(){
     global $conexion;
    $data = array();
     $sql = mysql_query( "SHOW COLUMNS FROM notac  ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    
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
function notac_campos_a_mostrar(){
     global $conexion;
    $data = array();
     $sql = mysql_query( "SELECT valor FROM _opciones WHERE opcion = 'notac_thead' ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    
    $reg = mysql_fetch_array($sql);
    
    return json_decode($reg[0],true);
}

function notac_thead(){    
    $campo_disponibles = notac_campos_disponibles();   
    $notac_campos_a_mostrar = notac_campos_a_mostrar();        
    echo "
     <thead>
        <tr> ";
    echo "<th>"._tr("#")."</th> "; // numero de linea
    foreach ($campo_disponibles as $value) {        
        if(in_array($value, $notac_campos_a_mostrar)){
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
function notac_tfoot(){    
   notac_thead();
}


