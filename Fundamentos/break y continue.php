<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <?php
    echo "<h2>Break</h2>";
    echo "rompe el ciclo cuando llega ala iteracion numero 5 <br>";
    // rompe el ciclo cuando llega ala iteracion numero 5
    for ($i = 1; $i < 10; $i++) {
        if ($i == 5) {

            break;
        }
        echo $i . "<br>";
    }



    echo " <h2>Continue</h2>";
    echo "continua si i es igual a 5 salta la iteracion y continua el ciclo <br>";

    //continua si i es igual a 5 salta la iteracion y continua el ciclo
    for ($i = 1; $i <= 10; $i++) {
        if ($i == 5) {

            continue;
        }
        echo $i . "<br>";
    }

    echo "<h2>Break y Continue</h2>";
    echo "salta el numero 2 con continue y termina con break cuando el resultado es 8 <br>";
    
    //salta el numero 2 con continue y termina con break cuando el resultado es 8
    for ($i=0; $i < 10 ; $i++) { 
        if ($i == 2)continue;
        if ($i == 8) break;
        echo $i . "<br>";
        
    }
    ?>
</body>

</html>