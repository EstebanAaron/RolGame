<?php
namespace Dsw\Rpg;


class Clerigo extends Personaje implements Curable{
  public $poderCurativo;


  function __construct($nombre, $nivel, $puntosDeVida, $poderCurativo)
  {
    parent::__construct($nombre, $nivel, $puntosDeVida);
    $this->poderCurativo= $poderCurativo;
  }

  function curar()
  {
    return $this->poderCurativo*3;
  }

  function atacar()
  {
    return $this->poderCurativo*2;
  }

  function defender($dañoinicial)
  {
    $dañofinal = $dañoinicial - $this->poderCurativo/2;
    return $dañofinal>0?$dañofinal:0;
  }
}