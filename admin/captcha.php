<?php
<<<<<<< HEAD
/**
 * Genera un codigo para usarlo en captcha
 * @package captcha
 * @param type $largo Largo del captcha [4-9] un largo adecuado
 * @return string
 */
function captcha_genera($largo){    
    return "10+0"; 
}
/**
 * Verifica si el codigo es igual al captcha
 * @package captcha
 * @param type $codigo Codigo recibido 
 * @param type $captcha Captcha
 * @return boolean Verdadero o falso
 */
function captcha_verifica($codigo, $captcha){
    if($codigo == $captcha){
=======

function captcha_genera(){
    
    return "10+0"; 
}

function captcha_verifica($codigo, $valor){
    if($codigo == $valor){
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
        return true;
    }else{
        false;
    }
}
<<<<<<< HEAD
/**
 * 
 */
=======
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
function captcha_html(){
    echo '<div class="form-group">
          <label for="captcha">Captcha</label>
          <input type="text" 
          class="form-control" 
          id="password" 
          name="password" 
          placeholder="'. captcha_genera().'">
          </div>    '; 
}