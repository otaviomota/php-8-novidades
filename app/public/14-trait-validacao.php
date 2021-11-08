<?php

trait Motor
{
    abstract public function ligar(array $inicializador): float;
}

class Carro
{
    use Motor;

    // ante permitido não enviar os parâmetros
    // function ligar()
    // {
    //     return 100;
    // }

    function ligar(array $inicializador): float
    {
        return 100;
    }
}
