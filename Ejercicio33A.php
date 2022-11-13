<head>
    <meta charset="UTF-16">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisible entre 3 y 7</title>
</head>
<body>


<?php 
   /*
    Escribe un programa que dado un número indique si el número es 
    divisible por 3 y por 7
    */
    $multiple = $_GET["multiple"];

    if ($multiple%3 == 0 && $multiple%7 == 0){
        echo "El numero ".$multiple." es multiple de 3 y 7";
    }
    else{
        echo "El numero ".$multiple." no es multiple de 3 y 7";
    } 
?> 

</body>