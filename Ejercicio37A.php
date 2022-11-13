<head>
    <meta charset="UTF-16">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validador 4 cifras</title>
</head>
<body>


<?php 
   /*
    Crea un programa que introduciendo un número de máximo 4 cifras 
    (crea un proceso para validarlo) determine si tiene 1, 2, 3 o 4 
    cifras imprimiendo un mensaje que lo indique
    */

    $digito = $_GET["digito"];

    $cifras = strlen($digito);

    if ($cifras == 4){
        echo $digito." el número tiene ".$cifras;
    }elseif ($cifras < 3){
        echo $digito." el número tiene ".$cifras;
    }elseif($cifras == 2){
        echo $digito." el número tiene ".$cifras;
    }else{
        echo $digito." el número tiene ".$cifras;
    } 
?> 

</body>