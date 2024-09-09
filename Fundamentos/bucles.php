<?php
echo " <h1>Bucles</h1>";
echo "<h2>FOR</h2>";
echo "<b>imprimimos numero del 1 al 10 con ciclo for</b> <br>";
// FOR ***************************************************************************************************
// imprime numeros del 1 al 10
for ($i = 1; $i <= 10; $i++) {
    echo "$i <br>";
}

// imprime tabla de multiplicar de el 5
echo "<br>imprimimos la tabla de multiplicar de el 5 <br>";
$num = 5;
for ($i = 1; $i <= 10; $i++) {
    echo "$num x $i =" . ($num * $i) . "<br>";
}


//Contenemos los numero primos dEL 1 AL 50
echo "<br><p>primos del numero 1 al 50</p>";

function esprimo($numero)
{ // creamos las funcion esprimo y que requiere del la variable numero
    if ($numero <= 1) return false; // verificamos que sea numeros naturales mayores a 1
    // si el resultado es menor a 1, automaqticamente retorna falso
    for ($i = 2; $i <= sqrt($numero); $i++) { // itera desde 2 hasta la raiz cruadada del numero buscado
        // esto es por que lo divisores siempre estaran entre 2 y la raiz cuadrada del numero
        if ($numero % $i == 0) return false;  // si alguno de los numeros es divisible quiere decir que tiene mas divisores aparte de si mismo, por lo tanto automaticamente nos regresa false.
    }
    return true; // si no se sumple lo anteriro llega a este punto en el cual nos retorna verdadero
}
//NOTA return sn php y la mayoria de lenjuages termina automaticamente la funcion

for ($i = 1; $i <= 50; $i++) { // lo primero que hacemos es recorrer el for del numero 1 al 50

    if (esprimo($i)) { // verificamos SI la funcion esprimo arroja un resultado verdadero
        echo $i . "<br>"; // si da un resultado verdadero mostramos el numero
    }
}


//triangulo de astericos
echo "<br><p>triangulo de asterisco</p>";

for ($i = 1; $i <= 5; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}

//lista de numeros pares y lista de numeros impares.

echo "<p>escribe una lista de numeros pares y una lista de numeros impares del 1 aL 20</p>";

for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        echo $i . "  ";
    }
}
echo "<br>";
for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}

// FOREACH**********************************************************************************************
echo "<h2>Foreach</h2>";

// For para los arrays
echo "<p>For Echa para los arrays</p>";
echo "colores = array(rojo,verde,azul) <br>";

$colores = array("rojo", "verde", "azul");
foreach ($colores as $color) {
    echo "Color: $color <br>";
}

// IMPRIMIR SERIE DE NOMBRES EN UN ARRAY
echo "<br>Impirme array de amigos <br>";
$amigos = array("johana", "Rico", "Bere", "Mariam", "Hedel", "Oziel");

foreach ($amigos as $amigo) {

    echo $amigo . "<br>";
}


// Valores e indices

echo "<br> numeros = array(10, 20, 30, 40, 50)";
$numeros = array(10, 20, 30, 40, 50);

foreach ($numeros as $indice => $valor) {
    echo "El valor en el índice $indice es $valor <br>";
}



echo "<h2>while</h2>";
echo "<p>imprimimos un numero del 1 al 10</p> <br>";
// imprimimos un numero del uno  al 10
$a = 1;
while ($a <= 10) {
    echo $a . "<br>";
    $a++;
}

//suma los numeros del 1 al 100 y luego imprime el resultado

echo "<br>suma los numeros del 1 al 100 y luego imprime el resultado<br>";
$n = 1;
$suma = 0;
while ($n <= 100) {
    $suma += $n;
    echo $n . ",";
    $n++;
}
echo  "<br> Resultado " . $suma;

// DO WHILE *******************************************************************************************************
echo "<h2> do while </h2>";
echo "impre los numero del 10 al 1 con el bucle do while <br>";

$a = 10;
do {
    echo   "<br>" . $a;
    $a--;
} while ($a >= 1);
