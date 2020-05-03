<?php

namespace app\CustomClass;

class CivilizacionBizantina extends Civilizacion
{

    protected function __construct()
    {
      $this->cantidad_inicial_piqueros = 5;
      $this->cantidad_inicial_arqueros = 8;
      $this->cantidad_inicial_caballeros = 15;
    }

}