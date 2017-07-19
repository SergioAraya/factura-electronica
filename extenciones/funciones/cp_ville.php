<?php 
 /**  
 magia_version: 0.0.11 
 **/
 function cp_ville_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM cp_ville WHERE id = $id   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql); 
    
    
    
    if($reg[$campo]){
        return $reg[$campo];
    } else {
        return false;
    }
}
function cp_ville_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion) 
            or error(__DIR__, __FILE__, __LINE__);
    while ($cp_ville = mysql_fetch_array($sql)) {
        //include "../gestion/cp_ville/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $cp_ville[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $cp_ville[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$cp_ville[$campo]\">$cp_ville[$campo]</option> \n";
    }
}

function cp_ville_add($selecionado="",$excluir=""){  
global $conexion; 
$sql=mysql_query(
        "SELECT * FROM cp_ville  ",$conexion) or error(__DIR__, __FILE__, __LINE__);
while ($cp_ville = mysql_fetch_array($sql)) {
    
        include "../gestion/cp_ville/reg/reg.php"; 
    
   echo "<option "; 
   if($selecionado==$cp_ville[0]) {echo " selected "; } else {echo ""; }
   if($excluir==$cp_ville[0] ) {echo " disabled "; } else {echo ""; }
   //echo "value=\"$cp_ville[0]\">$cp_ville[0]</option>";
   echo "value=\"$cp_ville[0]\">$cp_ville_cp_ville</option>";
} 
}
/**/
function cp_ville_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM cp_ville   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}


function cp_ville_campos_disponibles(){
     global $conexion;
    $data = array();
     $sql = mysql_query( "SHOW COLUMNS FROM cp_ville  ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    
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
function cp_ville_campos_a_mostrar(){
     global $conexion;
    $data = array();
     $sql = mysql_query( "SELECT valor FROM _opciones WHERE opcion = 'cp_ville_thead' ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    
    $reg = mysql_fetch_array($sql);
    
    return json_decode($reg[0],true);
}

function cp_ville_thead(){    
    $campo_disponibles = cp_ville_campos_disponibles();   
    $cp_ville_campos_a_mostrar = cp_ville_campos_a_mostrar();        
    echo "
     <thead>
        <tr> ";
    echo "<th>"._tr("#")."</th> "; // numero de linea
    foreach ($campo_disponibles as $value) {        
        if(in_array($value, $cp_ville_campos_a_mostrar)){
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
function cp_ville_tfoot(){    
   cp_ville_thead();
}


