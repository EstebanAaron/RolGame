<?php

namespace Dsw\Rpg;

class Partida
{

  private $personajes;

  function __construct()
  {
    $this->personajes = [];
  }

  function agregarPersonaje(Personaje $personaje)
  {
    $this->personajes[] = $personaje;
  }

  function obtenerPersonajes(): array
  {
    return $this->personajes;
  }

  function eliminarPersonaje(Personaje $personaje)
  {
    $result = array_search($personaje, $this->personajes);
    if ($result === false) {
      print("No esta en el array de personajes");
    } else {
      //esto elimina el dato array
      unset($this->personajes[array_search($personaje, $this->personajes)]);
      //y esto reindexa el array para que esten bien los indices
      $this->personajes = array_values($this->personajes);
    }
  }

  function obtenerPersonajesPorClase($class) : array {
    return array_filter($this->personajes, function($p) use ($class){
      return $p instanceof $class;
    });
  }
}
