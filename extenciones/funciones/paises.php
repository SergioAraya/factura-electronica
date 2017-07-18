<?php 
 /**  
 magia_version: 0.0.11 
 **/
 function paises_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM paises WHERE id = $id   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql); 
    
    
    
    if($reg[$campo]){
        return $reg[$campo];
    } else {
        return false;
    }
}
function paises_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion) 
            or error(__DIR__, __FILE__, __LINE__);
    while ($paises = mysql_fetch_array($sql)) {
        //include "../gestion/paises/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $paises[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $paises[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$paises[$campo]\">$paises[$campo]</option> \n";
    }
}

function paises_add($selecionado="",$excluir=""){  
global $conexion; 
$sql=mysql_query(
        "SELECT * FROM paises  ",$conexion) or error(__DIR__, __FILE__, __LINE__);
while ($paises = mysql_fetch_array($sql)) {
    
        include "../gestion/paises/reg/reg.php"; 
    
   echo "<option "; 
   if($selecionado==$paises[0]) {echo " selected "; } else {echo ""; }
   if($excluir==$paises[0] ) {echo " disabled "; } else {echo ""; }
   //echo "value=\"$paises[0]\">$paises[0]</option>";
   echo "value=\"$paises[0]\">$paises_paises</option>";
} 
}
/**/
function paises_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM paises   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}


function paises_campos_disponibles(){
     global $conexion;
    $data = array();
     $sql = mysql_query( "SHOW COLUMNS FROM paises  ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    
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
function paises_campos_a_mostrar(){
     global $conexion;
    $data = array();
     $sql = mysql_query( "SELECT valor FROM _opciones WHERE opcion = 'paises_thead' ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    
    $reg = mysql_fetch_array($sql);
    
    return json_decode($reg[0],true);
}

function paises_thead(){    
    $campo_disponibles = paises_campos_disponibles();   
    $paises_campos_a_mostrar = paises_campos_a_mostrar();        
    echo "
     <thead>
        <tr> ";
    echo "<th>"._tr("#")."</th> "; // numero de linea
    foreach ($campo_disponibles as $value) {        
        if(in_array($value, $paises_campos_a_mostrar)){
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
function paises_tfoot(){    
   paises_thead();
}


