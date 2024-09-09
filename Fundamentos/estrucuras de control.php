<?php

//ejemplo de estrutura iF

// determian si una persona es mayor o menor de edad
$edad = 18;

if ($edad >= 18) {
    echo "tu edad es $edad  ya estas viejillo <br>";
} else {
    echo "tu edad es $edad hueles a carcel <br>";
}


// determina si un numero es par o inpar
$numero = 5;

if ($numero % 2 == 0) {
    echo "$numero este numero es parar <br>";
} else {
    echo "$numero ESTE NUMERO ES IMPAR <br>";
}


// asigna calidicaciones A,B,C,D,F segun la calificacion obtenidadd
$calificacion = 70;
if ($calificacion >= 90) {
    echo "A <br>";
} elseif ($calificacion >= 80) {
    echo "B <br>";
} elseif ($calificacion >= 70) {
    echo "C  <br>";
} elseif ($calificacion >= 60) {
    echo "D <br>";
} else {
    echo "F <br>";
}


// compara 2 numeros y determina cual es mayo y cuales menor

$num1 = 10;
$num2 = 17;

if ($num1 > $num2) {
    echo "El mayor es $num1 <br>";
} elseif ($num1 < $num2) {
    echo "El mayor es $num2 <br>";
} else {
    echo "ambos numeros son iguales $num1, $num2 <br>";
}

//verfica si un numero esta dentro de un rango especificado
$num = 49;


if ($num <= 50 && $num >= 10) {
    echo "numero <b>$num </b> esta en el rango de 10-50 <br>";
} else {
    echo "numero <b>$num </b> exede el rango de 10-50 <br>";
}

// identifica los dias de la semana y determian el valor que representan 


$dia = "jueves";

switch ($dia) {
    case 'lunes':
        echo " $dia es el dia 1 <br>";
        break;
    case 'martes':
        echo "$dia es el dia 2 <br>";
        break;
    case 'miercoles':
        echo " $dia es el dia 3 <br>";
        break;
    case 'jueves':
        echo " $dia es el dia 4 <br>";
        break;
    case 'viernes':
        echo "$dia es el dia 5<br>";
        break;
    case 'sabado':
        echo " $dia es el dia 6 <br>";
        break;
    case 'domingo':
        echo " $dia es el dia 7 <br>";
        break;

    default:
        echo " ese dia no existe <br>";
        break;
}
