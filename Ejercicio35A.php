<head>
    <meta charset="UTF-16">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Notas</title>
</head>
<body>


<?php 
   /*
    Escribe un programa que introduciendo una nota entre 0 y 
    10 indique el resultado en 
    forma de texto según la siguiente tabla
    
    Insuficiente de 0 a 4
    Suficiente de 5 a 6
    Notable de 7 a 8
    Excelente de 9 a 10
    */

    $nota = $_GET["nota"];

    if ($nota >=0 && $nota <=4.99){
        echo "La nota ".$nota." es un Insuficiente";
    }elseif($nota >=5 && $nota <=6.99){
        echo "La nota ".$nota." es un Suficiente";
    }elseif($nota >=7 && $nota <=8.99){
        echo "La nota ".$nota." es un Notable";
    }elseif($nota >=9 && $nota <=10){
        echo "La nota ".$nota." es un Excelente";
    }else{
        echo "No se puede sacar mas de un 10";
    }
    
?> 

</body>