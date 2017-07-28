<?php

/**
  magia_version: 0.0.11
 * */
function plugins_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM plugins WHERE id = $id   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);



    if ($reg[$campo]) {
        return $reg[$campo];
    } else {
        return false;
    }
}

function plugins_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion)
            or error(__DIR__, __FILE__, __LINE__);
    while ($plugins = mysql_fetch_array($sql)) {
        //include "../gestion/plugins/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $plugins[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $plugins[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$plugins[$campo]\">$plugins[$campo]</option> \n";
    }
}

function plugins_add($selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT * FROM plugins  ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    while ($plugins = mysql_fetch_array($sql)) {

        include "../gestion/plugins/reg/reg.php";

        echo "<option ";
        if ($selecionado == $plugins[0]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $plugins[0]) {
            echo " disabled ";
        } else {
            echo "";
        }
        //echo "value=\"$plugins[0]\">$plugins[0]</option>";
        echo "value=\"$plugins[0]\">$plugins_plugins</option>";
    }
}

/**/

function plugins_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM plugins   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}

function plugins_campos_disponibles() {
    global $conexion;
    $data = array();
    $sql = mysql_query("SHOW COLUMNS FROM plugins  ", $conexion) or error(__DIR__, __FILE__, __LINE__);

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
function plugins_campos_a_mostrar() {
    global $conexion;
    $data = array();
    $sql = mysql_query("SELECT valor FROM _opciones WHERE opcion = 'plugins_thead' ", $conexion) or error(__DIR__, __FILE__, __LINE__);

    $reg = mysql_fetch_array($sql);

    return json_decode($reg[0], true);
}

function plugins_thead() {
    $campo_disponibles = plugins_campos_disponibles();
    $plugins_campos_a_mostrar = plugins_campos_a_mostrar();
    echo "
     <thead>
        <tr> ";
    echo "<th>" . _tr("#") . "</th> "; // numero de linea
    foreach ($campo_disponibles as $value) {
        if (in_array($value, $plugins_campos_a_mostrar)) {
            echo "<th>" . _tr($value) . "</th> ";
        }
    }
    echo "<th>" . _tr("Acción") . "</th> "; // accion             
    echo "    </tr>
    </thead>";
}

/**
 * 
 */
function plugins_tfoot() {
    plugins_thead();
}

function plugins_lista() {
    $filename = "../gestion/_contenido/index.php";
    $data = array();
    
    if (file_exists($filename)) {

        $v = file_get_contents($filename);
        $fp = fopen($filename, "r");
        while (!feof($fp)) {
           echo  $line = fgets($fp) . "<br>";
           $key[0] = explode(":", $line);
            
            array_push($data, $data[]);
        }

        fclose($fp);
        echo "<pre>"; 
        var_dump($data);
        echo "</pre>";
    } else {
        return "index.php no existe";
    }
}

/**
 * Lee el arvivo version en la carpeta del plugin 
 * @param type $plugin
 * @return string
 */
function plugins_version($plugin) {
    $filename = "../gestion/$plugin/version";

    if (file_exists($filename)) {

        $v = file_get_contents($filename);

        /*
          $fp = fopen($filename, "r");
          while (!feof($fp)) {
          $linea = fgets($fp);
          }

          fclose($fp);
         */
        if ($v) {
            return $v;
        } else {
            return "Desconocida";
        }
    } else {
        return "imposible verificar la version de $plugin";
    }
}

function plugins_instalar($plugins_nombre, $plugins_plugin_zip) {
    // verificamos si el plugin existe para borrarlo 
    // copiamos el zip con el nombre del plugin en una carpeta tempral
    // Descomprimimos los archivos en la carpeta 
    // borramos la carpeta temporal 
    // verificamos que exista todos los ficheros adecuados 
    // ar permisos adecuados a cada archivo
//http://php.net/manual/en/ziparchive.extractto.php
//http://php.net/manual/es/class.ziparchive.php
    // agrego mi usuario al grupo apache



    $plugin_a_instalar = $plugins_plugin_zip;
    echo "<h2>Empezamos a borrar</h2>";
    $filename = "../gestion/facturas";
    if (file_exists($filename)) {
        delete_dir($filename);
    }

    $path = "../gestion/plugins";
    $zipfile = "$path/3.zip";
    $archivo_comprimido = "tmp.zip";

    if (file_exists($zipfile)) {
        echo "<p>$archivo_comprimido Existe</p>";
    } else {
        echo "No existe <br>";
    }

    if (!@copy($zipfile, "$path/$archivo_comprimido")) {
        $errors = error_get_last();
        echo "COPY ERROR: " . $errors['type'];
        echo "<br />\n" . $errors['message'];
    } else {
        chmod("$path/facturas", 0777);
        echo "<p>File $archivo_comprimido copied from remote!</p>";
    }




    $zip = new ZipArchive;
    if ($zip->open($zipfile) === true) {

        for ($i = 0; $i < $zip->numFiles; $i++) {

            $zip->extractTo("$path/", array($zip->getNameIndex($i)));

            // here you can run a custom function for the particular extracted file
        }

        $zip->close();
    }




// descomprime 
    /*
      $zipArchive = new ZipArchive();
      $result = $zipArchive->open($archivo_comprimido);
      if ($result === TRUE) {
      $zipArchive->extractTo("$path/facturas/");
      $zipArchive->close();
      // Do something else on success
      echo "<p>ok descomprimodo en $path/facturas</p>";
      } else {
      echo "<p>error al descomprimir: $archivo_comprimido</p>";
      // Do something on error
      } */
}

// dest shouldn't have a trailing slash
function zip_flatten($zipfile, $dest = '.') {
    $zip = new ZipArchive;
    if ($zip->open($zipfile)) {
        for ($i = 0; $i < $zip->numFiles; $i++) {
            $entry = $zip->getNameIndex($i);
            if (substr($entry, -1) == '/')
                continue; // skip directories

            $fp = $zip->getStream($entry);
            $ofp = fopen($dest . '/' . basename($entry), 'w');

            if (!$fp)
                throw new Exception('Unable to extract the file.');

            while (!feof($fp))
                fwrite($ofp, fread($fp, 8192));

            fclose($fp);
            fclose($ofp);
        }

        $zip->close();
    } else
        return false;

    return $zip;
}

function delete_dir($src) {
    $dir = opendir($src);
    while (false !== ( $file = readdir($dir))) {
        if (( $file != '.' ) && ( $file != '..' )) {
            if (is_dir($src . '/' . $file)) {
                delete_dir($src . '/' . $file);
            } else {
                unlink($src . '/' . $file);
                echo "<b>Borrado</b> : $file <br>";
            }
        }
    }
    closedir($dir);
    rmdir($src);
}
