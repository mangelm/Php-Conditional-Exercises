<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Substitucion palabras</title>
</head>
<body>


<?php 
   /*
   Escribe un programa que pinte si las palabras "todas", 
   "Dios", "cambiar" están en la frase: "Señor, 
   concédeme serenidad para aceptar todo aquello que 
   no puedo cambiar, fortaleza para cambiar lo que soy 
   capaz de cambiar y sabiduría para entender la diferencia.
   " Pinta una respuesta por cada palabra con el formato: 
    "La palabra "todas" está/no está en la frase... 
    */
    $oracion = "Señor, concédeme serenidad para aceptar todo aquello que no puedo 
    cambiar, fortaleza para cambiar lo que soy 
    capaz de cambiar y sabiduría para entender la diferencia";
    
    $buscar_todas = strpos($oracion,"todas");
    $buscar_dios = strpos($oracion,"Dios");
    $buscar_cambiar = strpos($oracion,"cambiar");

    if ($buscar_todas > 0) {
        echo "La palabra todas esta en la frase";
    }
    else if ($buscar_dios > 0){
        echo "La palabra cambiar esta en la frase";
    }
    else if ($buscar_cambiar > 0){
        echo "La palabra cambiar esta en la frase";
    }else{
        echo "En la frase no esta ni la palabra 'cambiar', ni la palabra 'todas', ni la palabra 'Dios'";
    }

?> 

</body>