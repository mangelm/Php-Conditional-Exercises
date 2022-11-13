<head>
    <meta charset="UTF-16">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rellenar con zeros</title>
</head>
<body>


<?php 
   /*
   Crea un programa que introduciendo un número entero y positivo de 5 cifras 
   como máximo rellene por la izquierda con zeros hasta conseguir 
   completar las 5 cifras. 
   Por ejemplo, si introducimos el número 64 el resultado sería 00064, 
   si el número es el 20450 el resultado sería 20450.
    */
    $positivo = $_GET['positivo'];

    $cifras = strlen($positivo);

    if ($cifras == 5){
        echo $positivo;
    }else{
        //Pone los zeros a la izquierda contando hasta 5 en total.
        echo str_pad($positivo,5,"0",STR_PAD_LEFT);
    }
?> 

</body>