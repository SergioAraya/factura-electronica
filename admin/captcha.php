<?php
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
        return true;
    }else{
        false;
    }
}
/**
 * 
 */
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