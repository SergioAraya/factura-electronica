<?php 
 /**  
 magia_version: 0.0.11 
 **/
 function notac_items_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM notac_items WHERE id = $id   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql); 
    
    
    
    if($reg[$campo]){
        return $reg[$campo];
    } else {
        return false;
    }
}
function notac_items_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion) 
            or error(__DIR__, __FILE__, __LINE__);
    while ($notac_items = mysql_fetch_array($sql)) {
        //include "../gestion/notac_items/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $notac_items[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $notac_items[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$notac_items[$campo]\">$notac_items[$campo]</option> \n";
    }
}

function notac_items_add($selecionado="",$excluir=""){  
global $conexion; 
$sql=mysql_query(
        "SELECT * FROM notac_items  ",$conexion) or error(__DIR__, __FILE__, __LINE__);
while ($notac_items = mysql_fetch_array($sql)) {
    
        include "../gestion/notac_items/reg/reg.php"; 
    
   echo "<option "; 
   if($selecionado==$notac_items[0]) {echo " selected "; } else {echo ""; }
   if($excluir==$notac_items[0] ) {echo " disabled "; } else {echo ""; }
   //echo "value=\"$notac_items[0]\">$notac_items[0]</option>";
   echo "value=\"$notac_items[0]\">$notac_items_notac_items</option>";
} 
}
/**/
function notac_items_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM notac_items   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}


function notac_items_campos_disponibles(){
     global $conexion;
    $data = array();
     $sql = mysql_query( "SHOW COLUMNS FROM notac_items  ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    
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
function notac_items_campos_a_mostrar(){
     global $conexion;
    $data = array();
     $sql = mysql_query( "SELECT valor FROM _opciones WHERE opcion = 'notac_items_thead' ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    
    $reg = mysql_fetch_array($sql);
    
    return json_decode($reg[0],true);
}

function notac_items_thead(){    
    $campo_disponibles = notac_items_campos_disponibles();   
    $notac_items_campos_a_mostrar = notac_items_campos_a_mostrar();        
    echo "
     <thead>
        <tr> ";
    echo "<th>"._tr("#")."</th> "; // numero de linea
    foreach ($campo_disponibles as $value) {        
        if(in_array($value, $notac_items_campos_a_mostrar)){
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
function notac_items_tfoot(){    
   notac_items_thead();
}


