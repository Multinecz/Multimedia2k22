<?php

/*
Casting: Es cado forzamos a un tipo de dato
que se convierta en otro
*/

$numero_string = "7"; // string
var_dump($numero_string);
echo "<br>";

$numero int = (int) $numero_string; //integer
var_dump($numero_int);
echo "<br>";

$numero_float = (float) $numero_string;
var_dump($numero_float);
echo"<br>";

$dias = 5.85;
$dias = (int) $dias;
var_dump($dias);
echo "<br>";

$bandera = 0;
$bandera = (bool) $bandera;
var_dump($bandera);
echo"<br>";
// falso cuando es 0
//verdadero cuando es distinto 0

?>