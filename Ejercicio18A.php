<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contar caracteres texto</title>
</head>
<body>


<?php 
    /*
    Escribe un programa que pinte el número de caracteres y el 
    número de palabras que tiene la frase: "klaatu barada nikto". 
    Pista: Conoce la función str_word_count, strlen
    */
    $frase = "klaatu barada nikto";
    // Para quitar los espacios remplazo los huecos en blanco por huecos sin espacio de la frase
    $frase_sinespacios = str_replace(' ','',$frase);
    echo "El tamaño de la frase: ".$frase." es ".strlen($frase_sinespacios)."<br/>";
    echo "La cantidad de palabras de la frase: ".$frase." es ".str_word_count($frase);
?> 

</body>