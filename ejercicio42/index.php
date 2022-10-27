<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 42</title>
</head>

<body>
    <?php
    function suma($num)
    {
        $suma = 0;
        for ($i = 0; $i < strlen($num); $i++) {
            $suma += $num[$i];
        }
        return $suma;
    }

    $num = "33";
    echo suma($num);
    ?>
</body>
</html>