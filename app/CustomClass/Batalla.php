<?php

namespace app\CustomClass;

class Batalla
{

    public $ejercito_atacante;
    public $ejercito_atacado;

    protected function __construct($ejercito_atacante, $ejercito_atacado)
    {
        $this->ejercito_atacado;
        $this->ejercito_atacante;
    }

    public function calcularGanador()
    {
        if ($this->ejercito_atacante->fuerza_ejercito > $this->ejercito_atacado->fuerza_ejercito) {
            $this->ejercito_atacante->monedas += 100;
            return $this->ejercito_atacante;

        }elseif($this->ejercito_atacante->fuerza_ejercito == $this->ejercito_atacado->fuerza_ejercito){
            $this->ejercito_atacante->monedas -= 100;
            $this->ejercito_atacado->monedas -= 100;
        }else{
            $this->ejercito_atacado->monedas += 100;
            return $this->ejercito_atacado;
        }

        
    }
}
