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
    function cuenta($n1, $n2, $n3 = 1)
    {
        if ($n1 > $n2) echo 'El primer numero ha de ser menor al segundo numero.';

        if ($n3 <= 0) echo 'Numero no valido';

        for ($i = $n1; $i <= $n2; $i+=$n3) {
            if ($i % $n3 == 0 and $i == $n2) {
                echo $i;
            } else {
                echo "$i , ";
            }
        }
    }
    ?>

    <?php
    cuenta(10, 20, 5);
    ?>
</body>

</html>