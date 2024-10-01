<?php
    $fichero = "./copia_seguridad/datos.txt";
    $datosFichero = file_get_contents($fichero);
    if (file_exists($fichero)) {
        if (preg_match("^\w{4,}[@]{1}\w{4,}[.]{1}[a-z]{2,4}$", $datosFichero) == 1) {
            echo "Hay coincidencias.";
            preg_replace("^\w{4,}[@]{1}\w{4,}[.]{1}[a-z]{2,4}$", "salva@outlook.es", "salvagomezrisen@gmail.com");
        } else {
            echo "Patron no encontrado.";
        }       
    } else {
        echo "El fichero no existe.";
    }

    //"^\w{4,}[@]{1}\w[.]{1}[a-z]{2,4}$"
?>