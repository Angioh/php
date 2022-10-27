<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 39</title>
</head>

<body>

    <?php
    $dia = 30;
    $mes = 13;
    $anho = 2099;


    function valida($dia, $mes, $anho)
    {

        $valida = false;
        if ($dia == null || $mes == null || $anho == null) {
            $valida = false;
        } elseif ($dia > 31 || $mes > 12 || $dia <= 0 || $mes <= 0 || $anho <= 0) {
            $valida = false;
        } elseif ($mes == 2 && $dia > 28) {
            $valida = false;
        } elseif ($mes == 4 || $mes == 6 || $mes == 9 || $mes == 11 && $dia > 30) {
            $valida = false;
        } else {
            $valida = true;
        }
        return $valida;
    }

    echo (valida($dia, $mes, $anho) ? "Es válida" : "No es válida");

    ?>
</body>
</html>