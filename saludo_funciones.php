<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo</title>
</head>
<body>
    <h1>Mi saludo</h1>
    <?php
        function saludo($n) {
            echo "Hola, soy $n";
        }
    ?>

    <?php
        $nombre = "Salva";
        saludo($nombre);
    ?>
</body>
</html>