<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 34</title>
</head>
<body>
   
<?php

$count=0;

do {

    $num=rand(1,6);
    $count++;

} while ($num !=6);

echo "El número 6 ha tardado en salir " . $count . " tiradas";
?>

</body>
</html>