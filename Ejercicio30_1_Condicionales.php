<head>
    <meta charset="UTF-16">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi plataforma de juego</title>
</head>
<body>


<?php 
   /*
    Modifica el archivo Ejercicio30_1_Condicionales.php para que muestre PS4 
    si seleccionó SONY, SWITCH si seleccionó NINTENDO, XBOX ONE si seleccionó 
    MICROSOFT y PC MASTER RACE si seleccionó PC.
    */

    $ciaSelected = $_GET['ciaSelect'];
 
    if ($ciaSelected == "SONY"){
        echo "PS4";
    }else if($ciaSelected == "NINTENDO"){
        echo "SWITCH";
    }else if($ciaSelected == "MICROSOT"){
        echo "XBOX ONE";
    }else{
        echo "PC MASTER RACE";
    }
        
    

?> 

</body>