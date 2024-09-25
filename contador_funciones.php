<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
</head>

<body>
    <h1>Mi contador</h1>
    <?php
    function cuenta($n1, $n2)
    {
        if ($n1 > $n2) echo 'El primer numero ha de ser menor al segundo numero.';

        for ($i = $n1; $i <= $n2; $i++) {
            if ($i == $n2) {
                echo $i;
            } else {
                echo "$i , ";
            }
        }
    }
    ?>

    <?php
    cuenta(10, 20);
    ?>
</body>

</html>