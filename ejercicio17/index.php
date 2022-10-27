<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17</title>
</head>
<body>
    <?php
    $fecha = date_create();
    $dia = date_format($fecha,'w');
    $diaLetras = date_format($fecha, 'l');

    if($dia==0 || $dia == 6){
        echo "$diaLetras es fin de semana. ";
        
    }
    else{
        echo "$diaLetras no es fin de semana. ";
        echo "Faltan ".(6-$dia). " días!";
    }
    
    ?>
</body>
</html>