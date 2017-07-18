<?php 
 /**  
 magia_version: 0.0.11 
 **/
   
 echo '<td>' . $i . '</td> ';  
 foreach ($campo_disponibles as $campo) {
                            if (in_array($campo, facturas_campos_a_mostrar())) {
                                echo "<td>$facturas[$campo]</td> ";
                            }
                        }  
 echo '<td>
<a href='.$_SERVER['PHP_SELF'].'?p=facturas&c=ver&facturas_id='.$facturas_id.'>'._tr("Ver").'</a> |  
<a href='.$_SERVER['PHP_SELF'].'?p=facturas&c=editar&facturas_id='.$facturas_id.'>'._tr("Editar").'</a>  
                      
                </td>';  