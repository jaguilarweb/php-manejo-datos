<?php

use PHPUnit\Framework\TestCase;
use App\Validate;


class ValidateTest extends TestCase 
{
  public function test_email()
  {
    $email = Validate::email('j@dominio.com');
    $this->assertTrue($email);

    $email = Validate::email('j@dominio');
    $this->assertFalse($email);
  }
  public function test_url()
  {
    $url = Validate::url('https://dominio.com');
    $this->assertTrue($url);

    $url = Validate::url('https:/dominiocom');
    $this->assertFalse($url);

  }
  public function test_password()
  {
    $password = Validate::password('123456');
    $this->assertTrue($password);

    $password = Validate::password('123d');
    $this->assertFalse($password);

  }
}