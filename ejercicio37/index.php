<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 37</title>
</head>
<body>
   
<?php

$diassemana = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
 
$fecha = $diassemana[date('w')].", ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;

file_put_contents("fecha.txt" , "$fecha");

//Se abre el txt
$archivo = fopen("fecha.txt", "r");
while(!feof($archivo)){
    // Se lee una linea
    $traer = fgets($archivo);
    // Se imprime
    echo nl2br($traer);
}
// Se cierra el txt
fclose($archivo);

?>

</body>
</html>