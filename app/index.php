<?php

require __DIR__ . '/vendor/autoload.php';

//var_dump(App\Validate::email('jaguilar@@dominio.com'));
//pide al usuario un valor

$numero=random_int(1, 40);

$espar= App\Ejercicios::espar($numero);

if($espar){
  echo "El número $numero es par";
}else{
  echo "El número $numero es impar";
}


