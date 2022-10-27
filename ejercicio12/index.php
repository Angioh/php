<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>
<body>
    <?php
    $mes_actual = date('M Y');
    echo $mes_actual.'<br>';
    for($i =-1; $i>=-3;$i--){
        $mes_anterior = date('M Y',strtotime($i.' month'));
        echo $mes_anterior;
        echo '<br>';
    }
   
   
    
    ?>
</body>
</html>