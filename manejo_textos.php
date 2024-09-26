<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manejo de textos</title>
</head>
<body>
    <?php
        define('PI', 3.1415);
        $radio = 7;
        $area = PI * $radio * $radio;
        $areaFormat = number_format($area, 2);

        $textoResultado = "El area calculada del circulo es: $areaFormat<br>"; 
        echo $textoResultado;

        $textoResultadoMayus = strtoupper($textoResultado);
        echo "$textoResultadoMayus";

        $textoResultadoModificado = str_replace("calculada", "obtenida", $textoResultado);
        echo "$textoResultadoModificado";

        $textoResultadoLength = strlen($textoResultadoModificado);
        echo "$textoResultadoLength<br>";

        $textoResultadoPos = strpos($textoResultadoModificado, "circulo");
        echo "$textoResultadoPos<br>";

        $numeros = "1,2,3,4,5";
        $numeros_partes = explode(",", $numeros);
        $numeros_juntos = implode("+", $numeros_partes);
        echo "$numeros_juntos<br>";
        

    ?>
</body>
</html>