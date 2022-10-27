<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15</title>
</head>
<body>
    <?php
    $palabra = 'vida';

    if($palabra == strrev($palabra)){
        echo 'Es palíndroma<br>';
        echo $palabra;
        echo ' ';
        echo strrev($palabra);
    }
    else{
        echo 'No es palindroma <br>';
        echo $palabra;
        echo ' ';
        echo strrev($palabra);
    }
   
   
    
    ?>
</body>
</html>