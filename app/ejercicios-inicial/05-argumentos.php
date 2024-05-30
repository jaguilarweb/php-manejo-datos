<?php

//Valores
function greet($name)
{
  return "Hola $name";
}

echo greet('Carlos').'<br>'; // Hola Carlos

//referencias, uso de &, modifica la variable fuera de la función
$course = 'PHP';
function path(&$course)
{
  $course = 'Laravel';
  echo $course.'<br>'; // Laravel
}

path($course).'<br>';
echo $course.'<br>'; // PHP , pero si usé & en el argumento (referencia)

//predeterminado asignar fija

function greet2($name = 'Juan')
{
  return "Hola $name";
}

echo greet2().'<br>'; // Hola Juan
echo greet2('Carlos').'<br>'; // Hola Carlos