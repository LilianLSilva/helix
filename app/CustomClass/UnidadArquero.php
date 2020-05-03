<?php

namespace app\CustomClass;


class UnidadArquero extends Unidad
{

    protected function __construct()
    {
        $this->puntos_fuerza = 10;
        $this->costos_entrenamiento = 20;
        $this->costos_transformacion = 40;
        $this->puntos_ontenidos = 7;
    }

    public function transformacion($moneda)
    {
        if (!empty($moneda)) {
            if ($moneda >= $this->costos_transformacion) {
                return new UnidadCaballero;
            }
        }
    }
}