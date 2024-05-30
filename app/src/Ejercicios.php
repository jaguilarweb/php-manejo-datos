<?php

namespace App;

class Ejercicios {
  public static function espar($numero){
    return ($numero % 2 == 0) ? true : false;
  }
  
  public static function contarPalabras($palabras){
    return str_word_count($palabras);
  }


}