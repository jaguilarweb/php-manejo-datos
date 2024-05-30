<?php

//Esta técnica sirve si los key son númericos.
$frontend = [
  'javascript',
];

$backend = [
  'php',
  'laravel'
];

echo "<pre>";
var_dump(array_merge($frontend , $backend));

//Esta técnica sirve si los key son caracteres.
//Y si no quiero que el elemento con la misma key sea reemplazado
$frontend = [
  'a'=>'javascript',
];

$backend = [
  'a'=>'php',
  'b'=>'laravel'
];


echo "<pre>";
var_dump(array_merge_recursive($frontend , $backend));


//Esta técnica para mostras los valores de ambos array,
//funciona en la medida que haya diferentes key.
//Si se repiten las key, se toma el valor del segundo array.

$frontend = [
  'frontend'=>'javascript',
];

$backend = [
  'backend'=>'php',
  'framework'=>'laravel'
];

echo "<pre>";
var_dump($frontend + $backend);

//Esta técnica sirve si los key son númericos.
$courses = ['javascript', 'php', 'laravel'];
$categorias = ['frontend', 'backend', 'framework'];


echo "<pre>";
var_dump(array_combine($categorias , $courses));