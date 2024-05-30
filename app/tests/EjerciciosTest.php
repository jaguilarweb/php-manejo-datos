<?php

use PHPUnit\Framework\TestCase;
use App\Ejercicios;

class EjerciciosTest extends TestCase
{
  public function test_espar()
  {
    $espar = Ejercicios::espar(2);
    $this->assertTrue($espar);

    $espar = Ejercicios::espar(3);
    $this->assertFalse($espar);
  }

  public function test_contarPalabras()
  {
    $palabras = "Hola mundo como estas?";
    $cantidad = Ejercicios::contarPalabras($palabras);
    $this->assertEquals(4, $cantidad);
  }
}

