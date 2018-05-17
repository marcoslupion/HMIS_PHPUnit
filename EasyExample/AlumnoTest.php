<?php
use PHPUnit\Framework\TestCase;
require "Alumno.php";

final class EmailTest extends TestCase
{
private $usuario;
/**
* @before
*/
public function inicializar(){
	$this->usuario = new Alumno();
}
/*	
public function test_crear_alumno_vacio(){
  $this->assertFalse(is_null($this->usuario));
}

public function crear_alumno_vacio(){
  $this->assertTrue(!is_null($this->usuario));
}
public function test_alumno_vacio_campos_default(){
  $cadena = "Nombre: default/nApellidos: default/nCorreo electrónico: default@correo.com/nNota Media: 0/n";
  $this->assertEquals(
    $cadena,
      $this->usuario->toString()
  );
}
*/

public function test_cambiar_propiedad_nota_media(){
	$cadena = "Nombre: default/nApellidos: default/nCorreo electrónico: default@correo.com/nNota Media: 5/n";
	$this->usuario->cambiar_propiedad("nota",4);
	$this->assertEquals(
    $cadena,
      $this->usuario->toString()
  );
}

/**
* @depends test_cambiar_propiedad_nota_media
*/
public function test_calcular_nota_media(){
	$cadena = "Nombre: default/nApellidos: default/nCorreo electrónico: default@correo.com/nNota Media: 6/n";
	$this->usuario->calcular_nota_media(5,7);
	$this->assertEquals(
    $cadena,
      $this->usuario->toString()
  );
}




}









