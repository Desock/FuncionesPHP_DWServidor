<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobar la hora</title>
</head>
<body>
    <h1>Comprobación de la hora</h1>
    <?php
        $horaPropuesta = "00:00:12";
        $horaSplitteada = explode(":", $horaPropuesta);

        if(intval($horaSplitteada[0]) < 0 || intval($horaSplitteada[0]) >= 24) {
            echo "La hora es incorrecta.";
        } else if (intval($horaSplitteada[1]) < 0 || intval($horaSplitteada[1]) >= 60) {
            echo "Los minutos son incorrectos.";
        } else if (intval($horaSplitteada[2]) < 0 || intval($horaSplitteada[2]) >= 60) {
            echo "Los segundos son incorrectos.";
        } else {
            echo "La hora esta correcta.";
        }
    ?>
</body>
</html>