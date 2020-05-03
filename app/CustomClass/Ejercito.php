<?php

namespace app\CustomClass;

class Ejercito{
    
    
    public $monedas;
    public $fuerza_ejercito;
    public $historial_batallas = [];

    protected function __construct($cantidad_piqueros, $cantidad_arqueros, $cantidad_caballeros)
    {
        $this->monedas = 1000;
        $piquero = new UnidadPiquero;
        $arquero = new UnidadArquero;
        $caballero = new UnidadCaballero;
        $fuerzaPiquero = $piquero->puntos_fuerza * $cantidad_piqueros;
        $fuerzaArquero = $arquero->puntos_fuerza * $cantidad_arqueros;
        $fuerzaCaballero = $caballero->puntos_fuerza * $cantidad_caballeros;
        $this->fuerza_Ejercito = $fuerzaPiquero + $fuerzaArquero + $fuerzaCaballero;
    }

    public function atacar($ejercito){
        $batalla = new Batalla($this, $ejercito);
        array_push($this->historial_batallas, $batalla);
        $res = $batalla->calcularGanador();
        if ($res == $this) {
            return true;

        }
        return false;
    }

    
}


