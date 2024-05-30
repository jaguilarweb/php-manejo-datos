<?php

$courses = ['javascript', 'laravel', 'php'];

sort($courses);
echo "<pre>";
var_dump($courses);

rsort($courses);
echo "<pre>";
var_dump($courses);


$frutas = [
    10 => 'manzana',
    100 => 'pera',
    1000 => 'naranja',
    10000 =>'platano'
];

ksort($frutas);
echo "<pre>";
var_dump($frutas);

krsort($frutas);
echo "<pre>";
var_dump($frutas);

$vegetales = [
  10 => 'zanahoria',
  100 => 'beterraga',
  1000 => 'lechuga',
  10000 =>'espinaca'
];

echo "<pre>";
var_dump(array_slice($vegetales, 1));
echo "</pre>";

echo "<pre>";
var_dump(array_chunk($vegetales, 2));
echo "</pre>";

echo "<pre>";
var_dump(array_shift($vegetales));
echo "</pre>";

echo "<pre>";
var_dump(array_pop($vegetales));
echo "</pre>";

echo "<pre>";
var_dump(array_push($vegetales, 'cilantro'));
echo "</pre>";

echo "<pre>";
var_dump(array_unshift($vegetales, 'pepino'));
echo "</pre>";

echo "<pre>";
var_dump(array_flip($vegetales));
echo "</pre>";

/**
 * array_key_exists('frontend', $courses); //true
 * in_array('javascript', $courses); //true
 * array_keys($courses);
 * array_values($courses);
 * 
sort: Ordena un array.

rsort: Ordena un array en orden inverso.

ksort: Ordena un array por clave.

krsort: Ordena un array por clave en orden inverso.

array_slice: Extrae una parte de un array.

array_chunk: Divide un array en fragmentos.

array_shift: Quita un elemento del principio del array.

array_pop: Extrae el último elemento del final del array.

array_unshift: Añadir al inicio de un array uno a más elementos.

array_push: Inserta uno o más elementos al final de un array.

array_flip: Intercambia todas las claves de un array con sus valores asociados.
 */
