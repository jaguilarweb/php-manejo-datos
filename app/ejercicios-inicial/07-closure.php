<?php

//Función anónima
$greet = function ($name) //variable que requiere lógica
{
  return "Hola, $name";
};

echo $greet('Mundo').'<br>';

//Función anónima 
function greet (Closure $lang, $name)
{
  return $lang($name);
};

$es = function ($name)
{
  return "Hola, $name";
};

$en = function ($name)
{
  return "Hello, $name";
};

echo greet($es, 'Jenny').'<br>';
echo greet($en, 'Jenny').'<br>';