<?php
namespace Dsw\Rpg;

class Mago extends Personaje{
  public $mana;
  public function __construct($nombre, $nivel, $puntosDeVida,$mana)
  {
    parent::__construct($nombre, $nivel, $puntosDeVida);

    $this->mana=$mana;
  }
  public function atacar()
  {
    return $this->mana/2;
  }

  public function defender($dañoinicial)
  {
    $dañofinal = $dañoinicial - $this->mana/5;
    return $dañofinal>0?$dañofinal:0;
    
  }
}