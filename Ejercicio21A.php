<head>
    <meta charset="UTF-16">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sustitucion señor</title>
</head>
<body>


<?php 
   /*
   Escribe un programa que pinte si las palabras "todas", 
   "Dios", "cambiar" están en la frase: "Señor, 
    serenidad para aceptar todo aquello que no puedo cambiar,
     fortaleza para cambiar lo que soy capaz de cambiar y 
     sabiduría para entender la diferencia." Pinta una 
     respuesta por cada palabra con el formato: 
    "La palabra "todas" está/no está en la frase... 
    */
    $oracion = "Señor, concédeme serenidad para aceptar todo aquello que no puedo 
    cambiar, fortaleza para cambiar lo que soy 
    capaz de cambiar y sabiduría para entender la diferencia";
    
    
    $remplazo = str_replace("Señor","Dios",$oracion);
    echo $remplazo;
    
    /*$buscar_senor = strpos($oracion,"Señor");

    if ($buscar_senor == 0){
        $remplazo = str_replace("Señor","Dios",$oracion);
        echo $remplazo;
    }
    else{
        "No ha encontrado la palabra Señor";
    }*/

?> 

</body>