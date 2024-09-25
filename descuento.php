<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descuento</title>
</head>
<body>
    <?php
        function calcularDescuento($p, $d = 0){
            $precioFinal = $p - ($p * $d) / 100;
            return $precioFinal;
        }
    ?>
    <?php
        echo calcularDescuento(250, 10);
    ?>
</body>
</html>