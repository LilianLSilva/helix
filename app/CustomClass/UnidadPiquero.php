<?php

namespace app\CustomClass;

class UnidadPiquero extends Unidad
{

    protected function __construct()
    {
        $this->puntos_fuerza = 5;
        $this->costos_entrenamiento = 10;
        $this->costos_transformacion = 30;
        $this->puntos_ontenidos = 3;
    }

    public function transformacion($moneda)
    {
        if (!empty($moneda)) {
            if ($moneda >= $this->costos_transformacion) {
                return new UnidadArquero;
            }
        }
    }
}