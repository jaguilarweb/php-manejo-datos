<?php

$courses = [
  'javascript',
  'php'
];

$whishes = [
  'php',
  'laravel',
  'javascript',
  'vue.js'
];

//Función que muestra los elementos que difieren
//En el orden que están dispuestios
echo "<pre>";
var_dump(array_diff($whishes, $courses));

$arrayA = [1, 2, 3, 4, 5];
$arrayB = [3, 4, 5, 6, 7];

//Función que muestra los elementos que coinciden
echo "<pre>";
var_dump(array_diff($arrayA, $arrayB));
var_dump(array_intersect($arrayA, $arrayB));

//Función que muestra la diferencia según su key
//array_diff_assoc: valores, keys