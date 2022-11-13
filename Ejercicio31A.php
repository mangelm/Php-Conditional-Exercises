<head>
    <meta charset="UTF-16">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dias mes</title>
</head>
<body>


<?php 
   /*
    Escribe un programa que según el valor de la variable mes (puede ser number 
    o string) indique el número de días que tiene ese mes.(Utiliza el 
    condicional if...else if..else)"
    */

    $mes = $_GET['mes'];

    if ($mes == 'Enero'){
        echo "Enero tiene 30 dias";
    }else if ($mes == 'Febrero'){
        echo "Febrero tiene 28 dias";
    }else if ($mes == 'Marzo'){
        echo "Marzo tiene 31 dias";
    }else if ($mes == 'Abril'){
        echo "Abril tiene 30 dias";
    }else if ($mes == 'Mayo'){
        echo "Mayo tiene 31 dias";
    }else if ($mes == 'Junio'){
        echo "Junio tiene 30 dias";
    }else if ($mes == 'Julio'){
        echo "Julio tiene 31 dias";
    }else if ($mes == 'Agosto'){
        echo "Agosto tiene 31 dias";
    }else if ($mes == 'Septiembre'){
        echo "Septiembre tiene 30 dias";
    }else if ($mes == 'Octubre'){
        echo "Octubre tiene 31 dias";
    }else if ($mes == 'Noviembre'){
        echo "Noviembre tiene 30 dias";
    }else{
        echo "Diciembre tiene 31 dias";
    }

    /*
    if ($mes == 'Enero' or $mes == 'Abril' or $mes == 'Junio' or $mes == 'Septiembre' or $mes ='Noviembre'){
        echo "El mes tiene 30 dias";
    }elseif ($mes == 'Marzo' or $mes == 'Mayo' or $mes == 'Julio' or $mes == 'Agosto' or $mes = 'Octubre' or $mes = 'Diciembre'){
        echo "El mes tiene 31 dias";
    }else{
        echo "El mes tiene 28 dias";
    }
    }*/ 
    
?> 

</body>