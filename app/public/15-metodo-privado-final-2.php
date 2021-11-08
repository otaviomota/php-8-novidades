<?php

class Veiculo
{
    // permite método static
    static private function ligar(array $inicializador): float
    {
        return 100;
    }
}

class Carro
{
    public function ligar(array $inicializador): float
    {
        return 100;
    }
}
