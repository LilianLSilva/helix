<?php

namespace app\CustomClass;

Class UnidadCaballero extends Unidad
{

    protected function __construct()
    {
        $this->puntos_fuerza = 20;
        $this->costos_entrenamiento = 30;
        $this->costos_transformacion = 0;
        $this->puntos_ontenidos = 10;
    }

    public function transformacion($moneda){
        return false;
    }
}