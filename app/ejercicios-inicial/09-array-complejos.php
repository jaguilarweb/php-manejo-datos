<?php

//Se puede asignar el orden en el arreglo
$courses = [
  'frontend' => 'javascript', 
  'backend' => 'PHP', 
  'framework' =>'Laravel'
];

echo "<pre>";
var_dump($courses);
echo "</pre>";

foreach ($courses as $course){
  echo "$course <br>";
}

function upper($course, $key){
  echo strtoupper($course) . ": $key <br>";
}

array_walk($courses, 'upper');

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