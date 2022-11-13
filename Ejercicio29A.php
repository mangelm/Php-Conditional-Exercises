<head>
    <meta charset="UTF-16">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minutos pares e impares</title>
</head>
<body>

<?php 
   /*
    Escribe un programa que si en el momento de ejecutarse en 
    la hora del sistema los minutos 
    son impares imprima la frase: "La suma de 2 números 
    impares siempre es un número par". 
    Pista! Utiliza la función Date, revisa cual es el
    formato que debes utilizar
    */

    $fecha_min = date("i");
    $fecha_min_int = intval($fecha_min);
    
    if ($fecha_min_int %2 == 0){
        
    }else{
        echo "La suma de 2 números impares siempre es un número par";
    }
?> 

</body>