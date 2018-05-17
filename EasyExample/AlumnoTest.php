<?php
declare(strict_types=1);

require "PHPUnit\Framework\TestCase";
require "Alumno.php";

final class EmailTest extends TestCase
{
 public $alumno;

public function inicializar(){
  $this->$alumno = new Alumno("Zacarias","Ruiz","zaca@ual.prueba.com","4.99");
}

public function crear_alumno_vacio(){
  $usuario = new Alumno();
  $this->assertFalse(is_null($usuario)));
}

public function alumno_vacio_campos_default(){
  $usuario = new Alumno();
  $cadena = "Nombre: default/nApellidos: default/nCorreo electrónico: default@correo.com/nNota Media: 0/n";
  $this->assertEquals(
    $cadena,
      $usuario->toString()
  );
}


}
