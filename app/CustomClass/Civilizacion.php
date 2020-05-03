<?php namespace app\CustomClass;

Class Civilizacion
{

    private  $cantidad_inicial_piqueros;
    private  $cantidad_inicial_arqueros;
    private  $cantidad_inicial_caballeros;


    public function crear_ejercito()
    {
            $ejercito = new Ejercito($this->cantidad_inicial_piqueros, $this->cantidad_inicial_arqueros, $this->cantidad_inicial_caballeros);
            
    }



}