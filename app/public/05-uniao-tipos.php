<?php

declare(strict_types=1);

class Carro
{

    public function __construct(
        protected string $marca,
        protected string $cor,
    ) {
    }

    public function andar(int|string $aceleracao, int|string $velocidadeMaxima) : string|float
    {
        return "Acelerar: {$aceleracao} - Velocidade: {$velocidadeMaxima}";
    }
}

$uno = new Carro(marca: 'Fiat', cor: 'Preto',);

// parâmetro como string
echo $uno->andar(velocidadeMaxima: '110', aceleracao: '6');
