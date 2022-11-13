<head>
    <meta charset="UTF-16">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Positivo, Negativo o Zero</title>
</head>
<body>


<?php 
   /*
    Escribe un programa que dado un número indique si el 
    número es positivo, negativo o cero
    */
    $numero = $_GET["numero"];

    if ($numero > 0){
        echo "El numero ".$numero." es positivo";
    }elseif($numero < 0){
        echo "El numero ".$numero." es negativo";
    }else{
        echo "El numero es zero";
    }
    

    
?> 

</body>