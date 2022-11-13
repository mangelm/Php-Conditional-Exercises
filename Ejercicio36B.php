<head>
    <meta charset="UTF-16">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dia semana</title>
</head>
<body>


<?php 
   /*
    Escribe un programa que introduciendo un número del 1 al 7 
    imprima el día de la semana al que pertenece. (1 es lunes).
    */

    $dia = $_GET['dia'];

    if ($dia == 1){
        echo $dia." es Lunes";
    }elseif ($dia == 2){
        echo $dia." es Martes";
    }elseif ($dia == 3){
        echo $dia. " es Miercoles";
    }elseif ($dia == 4){
        echo $dia. " es Jueves";
    }elseif ($dia == 5){
        echo $dia. " es Viernes";
    }elseif ($dia == 6){
        echo $dia. " es Sábado";
    }elseif ($dia == 7){
        echo $dia. " es Domingo";
    }else{
        echo "No es ningun dia de la semana";
    }
 
?> 

</body>