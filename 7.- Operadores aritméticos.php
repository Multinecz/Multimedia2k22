<?php

// Operadores aritmeticos

$numero_1 = 5;
$numero_2 = 2;

// Suma
echo "Suma:";
echo $numero_1 + $numero_2;
echo "<br>";

// Resta
echo "Resta:";
echo $numero_1 - $numero_2;
echo "<br>";

// Multiplicación
echo "Multiplicacion:";
echo $numero_1 * $numero_2;
echo "<br>";

// División
echo "Division:";
echo $numero_1 / $numero_2;
echo "<br>";

// División módulo
echo "Suma:";
echo $numero_1 % $numero_2;
echo "<br>";

// Potencia
echo "Potencia:";
echo $numero_1 ** $numero_2;
echo "<br>";

// Ejercicio: Calcular la raíz cuadrática
// fórmula: -b +/- raíz(b al cuadrado - 4ac) /2a
// a=1 l b=-2 l c=1
/*$numero_3 = 1;
$numero_4 =-2;
$numero_5 = 1; 
$numero_6 = 4;
echo "Raíz cuadrática verdadero:";
echo $numero_4 + $numero_4 ** $numero_2 - $numero_3 * $numero_5 * $numero_4 / ($numero_2 * $numero_3);
echo "<br>"; */
$a = 1;
$b = -2;
$c = 1;

$x1 = ($b * -1) + (sqrt( ($b**2) - (4 * $a * $c))) / (2 * $a);
$x2 = ($b * -1) - (sqrt( ($b**2) - (4 * $a * $c))) / (2 * $a);
echo " X1 es: $x1 y X2 es: $x2";



?> 