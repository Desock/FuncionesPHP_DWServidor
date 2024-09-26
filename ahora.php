<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fecha de hoy</title>
</head>
<body>
    <h1>La fecha de hoy</h1>
    <?php
        date_default_timezone_set('Europe/Madrid');
        $fecha_actual = time();
        $textoFecha = date("d M Y - H:i:s");
        echo $textoFecha;
    ?>
</body>
</html>