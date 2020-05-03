<?php

namespace app\CustomClass;

abstract class Unidad{

    private  $puntos_fuerza = 0;
    private  $costos_entrenamiento = 0;
    private  $costos_transformacion = 0;
    private  $puntos_ontenidos= 0;

    public function entrenamiento($moneda){
        if (!empty($moneda)) {
            if ($moneda >= $this->costos_entrenamiento) {
                $this->puntos_fuerza += $this->puntos_ontenidos;
                return true;
            }
        }
    }

    abstract public function transformacion($moneda);

}