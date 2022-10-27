<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 36</title>
</head>
<body>
   
<?php

$matriz = [11,12,13,14,21,22,23,24,31,32,33,34,41,42,43,44];

for ($i=1; $i < count($matriz)+1; $i++) {
    echo $matriz[$i-1] . " ";
    if($i%4==0){
        echo "<br>";
    }
}
?>

</body>
</html>