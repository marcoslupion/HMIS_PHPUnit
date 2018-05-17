<?php
declare(strict_types=1);

final class Alumno
{
    private $nombre;
    private $apellidos;
    private $correo;
    private $nota_media;

    public function __construct()
    {
        $this->nombre = "default";
        $this->apellidos = "default";
        $this->correo = "default@correo.com";
        $this->nota_media = "0";
    }

    public function toString()
    {
      $cadena  ="";
      $cadena=$cadena . "Nombre: " .  $this->nombre."/n";
      $cadena=$cadena . "Apellidos: " .  $this->apellidos . "/n";
      $cadena=$cadena . "Correo electrónico: " . $this->correo . "/n";
      $cadena=$cadena . "Nota Media: " . $this->nota_media . "/n";
      return $cadena;
    }
	
    public function cambiar_propiedad($propiedad,$valor){
      if($propiedad=="nombre"){
        $this->nombre = $valor;

      }else if($propiedad=="apellidos"){
        $this->apellidos = $valor;

      }else if($propiedad=="correo"){
        $this->correo = $valor;

      }else if($propiedad=="nota"){
        $this->nota_media = $valor;
      }else{
        echo "ERROR";
      }
    }


}
