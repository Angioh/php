<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 22</title>
</head>

<body>
    <?php
    $salarioAnual = 40000;
$anhosTrabajados = $_POST['anhos'];
    if($anhosTrabajados>10){
        echo "El trabajador tiene $anhosTrabajados años trabajados, recibe un aumento del 10 porciento -->  ";
        echo $salarioAnual +=($salarioAnual*10/100);
    }
    elseif( $anhosTrabajados<10 && $anhosTrabajados>5){
        echo "El trabajador tiene menos de 10 años pero más de 5 se le aplica un aumento del 7 porciento -->  ";
        echo $salarioAnual +=($salarioAnual*7/100);
    }
    elseif($anhosTrabajados<5 && $anhosTrabajados> 3){
        echo "El trabajador tiene menos de 5 años pero más de 3 se le aplica un aumento del 5 porciento -->  ";
        echo $salarioAnual +=($salarioAnual*5/100);
    }
    elseif($anhosTrabajados < 3){
        echo "El trabajador tiene menos de 3 años trabajando, se le aplica un aumento del 3 porciento -->  ";
        echo $salarioAnual +=($salarioAnual*3/100);
    }
    
    ?>
</body>

</html>