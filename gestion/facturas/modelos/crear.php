 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql = "INSERT INTO facturas ( 
 ref 
 ,  id_presupuesto 
 ,  id_notac 
 ,  id_contacto 
 ,  sub_total 
 ,  iva 
 ,  anticipo 
 ,  saldo 
 ,  comentarios 
 ,  r1 
 ,  r2 
 ,  r3 
 ,  fecha_cobro 
 ,  expira 
 ,  ce 
 ,  estatus 
 ) VALUES ( 
 :ref 
 ,  :id_presupuesto 
 ,  :id_notac 
 ,  :id_contacto 
 ,  :sub_total 
 ,  :iva 
 ,  :anticipo 
 ,  :saldo 
 ,  :comentarios 
 ,  :r1 
 ,  :r2 
 ,  :r3 
 ,  :fecha_cobro 
 ,  :expira 
 ,  :ce 
 ,  :estatus 
   )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":ref"=>"$facturas_ref" 
 ,  ":id_presupuesto"=>"$facturas_id_presupuesto" 
 ,  ":id_notac"=>"$facturas_id_notac" 
 ,  ":id_contacto"=>"$facturas_id_contacto" 
 ,  ":sub_total"=>"$facturas_sub_total" 
 ,  ":iva"=>"$facturas_iva" 
 ,  ":anticipo"=>"$facturas_anticipo" 
 ,  ":saldo"=>"$facturas_saldo" 
 ,  ":comentarios"=>"$facturas_comentarios" 
 ,  ":r1"=>"$facturas_r1" 
 ,  ":r2"=>"$facturas_r2" 
 ,  ":r3"=>"$facturas_r3" 
 ,  ":fecha_cobro"=>"$facturas_fecha_cobro" 
 ,  ":expira"=>"$facturas_expira" 
 ,  ":ce"=>"$facturas_ce" 
 ,  ":estatus"=>"$facturas_estatus" 
             ) 
 ); 


if($config_debug){
    echo "<h3>Debug mode (".__FILE__." )</h3>";
    
    $variables = array(
        "\$sql"=>"$sql"
    );
        
    echo "<table border>";
    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";       
    foreach ($variables as $key => $value) {
        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
    }    
    echo "</table>";

}