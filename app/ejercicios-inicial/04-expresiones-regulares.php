<?php
//Expresiones regulares

echo('/ / => Contenedor').'<br>'; //Contenedor
echo('^').'<br>';; //Inicio
echo('$').'<br>'; // Final
echo('-').'<br>';; //Rango
echo('[]').'<br>';; //Patron
echo('{}').'<br>';; //Condicion



$password = '12345';// true
$password2 = '1234';// false
$password3 = '12345a';//false

/**
 * Este patron señala que la contraseña debe:
 * Tener solo números [0-9]
 * Mínimo 5 catacteres
 * Máximo 9 caracteres
 * 
 */
var_dump((bool) preg_match('/^[0-9]{5,9}$/', $password));
var_dump((bool) preg_match('/^[0-9]{5,9}$/', $password2));
var_dump((bool) preg_match('/^[0-9]{5,9}$/', $password3));




