 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql = "INSERT INTO presupuestos ( 
 ref 
 ,  id_factura 
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
 ,  :id_factura 
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
 ":ref"=>"$presupuestos_ref" 
 ,  ":id_factura"=>"$presupuestos_id_factura" 
 ,  ":id_contacto"=>"$presupuestos_id_contacto" 
 ,  ":sub_total"=>"$presupuestos_sub_total" 
 ,  ":iva"=>"$presupuestos_iva" 
 ,  ":anticipo"=>"$presupuestos_anticipo" 
 ,  ":saldo"=>"$presupuestos_saldo" 
 ,  ":comentarios"=>"$presupuestos_comentarios" 
 ,  ":r1"=>"$presupuestos_r1" 
 ,  ":r2"=>"$presupuestos_r2" 
 ,  ":r3"=>"$presupuestos_r3" 
 ,  ":fecha_cobro"=>"$presupuestos_fecha_cobro" 
 ,  ":expira"=>"$presupuestos_expira" 
 ,  ":ce"=>"$presupuestos_ce" 
 ,  ":estatus"=>"$presupuestos_estatus" 
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