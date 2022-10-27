<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 38</title>
</head>

<body>

    <?php
    $anho = 2016;

    function bisiesto($anho)
    {

        $bisiesto = false;

        if ($anho % 4 == 0 && $anho % 100 != 0) {
            if ($anho % 400 == 0) {
                $bisiesto = false;
            } else {
                $bisiesto = true;
            }
        }
        return $bisiesto;
    }

    $resultado = (bisiesto($anho) ? "Es bisiesto" : "No es bisiesto");

    echo $resultado;

    ?>

</body>

</html>