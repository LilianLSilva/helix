<?php

namespace app\CustomClass;

class CivilizacionChina extends Civilizacion
{

    protected function __construct()
    {
        $this->cantidad_inicial_piqueros = 2;
        $this->cantidad_inicial_arqueros = 25;
        $this->cantidad_inicial_caballeros = 2;
    }
}