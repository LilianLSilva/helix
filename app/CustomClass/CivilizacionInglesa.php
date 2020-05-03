<?php

namespace app\CustomClass;

class CivilizacionChina extends Civilizacion
{

    protected function __construct()
    {
        $this->cantidad_inicial_piqueros = 10;
        $this->cantidad_inicial_arqueros = 10;
        $this->cantidad_inicial_caballeros = 10;
    }
}