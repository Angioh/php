<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 29</title>
</head>

<body>
    <?php
        $numeroTabla = 5;

        echo 'Tabla de multiplicar del '.$numeroTabla;
        echo '<br>';
        for ($i = 0; $i <=12; $i++){
            $result= $i*$numeroTabla;
            echo "$i x $numeroTabla = $result";
            echo '<br/>';
        }
    ?>
</body>

</html>