<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intercambiar numeros</title>
</head>
<body>
    <?php
        function intercambia(&$n1, &$n2) {
            $aux = $n1;
            $n1 = $n2;
            $n2 = $aux;
        }
    ?>
    <?php
        $n1 = 1;
        $n2 = 2;
        echo intercambia($n1, $n2);
    ?>
</body>
</html>