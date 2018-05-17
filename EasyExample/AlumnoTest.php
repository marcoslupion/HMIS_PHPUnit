<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require "Alumno.php";

final class EmailTest extends TestCase
{
	private $usuario;


public function test_crear_alumno_vacio(){
  $usuario = new Alumno();
  $this->assertFalse(is_null($usuario));
}
/**
* @test
*/
public function crear_alumno_vacio(){
  $usuario = new Alumno();
  $this->assertFalse(is_null($usuario));
}

public function test_alumno_vacio_campos_default(){
  $usuario = new Alumno();
  $cadena = "Nombre: default/nApellidos: default/nCorreo electrónico: default@correo.com/nNota Media: 0/n";
  $this->assertEquals(
    $cadena,
      $usuario->toString()
  );
}




}
