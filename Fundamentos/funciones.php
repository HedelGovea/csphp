<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="subtitle">
        <h2>Funciones</h2>
    </div>

    <?php

    //sintaxis basica de una funcion 
    function nombreDelaFuncion()
    {
        // codigo que ejecuta la funcion 
        echo "la funcion mostrar este texto cuando se llame :)";
    }

    nombreDelaFuncion();

// FUNCIONES CON PARAMETROS****************************************************************************
    echo "<h3>Funciones con parametros</h3>";
    echo "creamos una funciones y le pasamos el parametro nombre";
    //creamos una funcion y le pasamos el parrametro nombre

    function Saludar($nombre)
    {
        echo "<br> hola $nombre <br>";
    }

    Saludar("hedel");
// VALORES POR DEFECTO EN PARAMETROS **************************************************************
    echo "<h3>valores por defecto en parametros</h3>";
    // podemos asignar valores por defecto en los parametros, si no se pasa un valor tomara el valor por defecto 

    function Saludos($nombre = "Generico por defecto <br>")
    {
        echo "hola $nombre ";
    }

    Saludos("Hedel <br>"); // el resultado ser Hola Hedel
    Saludos(); // el resultado sera hola Generico por defecto
    ?>


    <h3><strong>Retorno de variables</strong></h3>
    <?php 
    //RETORNO DE VARIABLE*************************************************************
    // las funciones pueden devolver un valor utilizando la palabra clave return
    function multiplicar($a, $b){
        return $a * $b;
    }

    $resultado = multiplicar(3,5); // el resultado sera 15
    echo $resultado;
    

    //ALCANSE DE LAS VARIABLES O (SCOPE)
    echo "<h3>ALCANSE DE LAS VARIABLES O (SCOPE)</h3>";
    $x=10;// variable global

    function mostrarX(){
        global $x; //hace que la variable sea accesible en la funcion ;
        echo $x;
    }

    mostrarX(); // resultado 10
    ?>

</body>

</html>