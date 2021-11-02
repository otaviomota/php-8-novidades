<?php

declare(strict_types=1);

class Marca
{
}

class Carro
{
    public function __construct(
        protected string|Marca $marca,
        protected string $cor,
    ) {
    }

    public function andar(
        int|string $aceleracao,
        int|string|null $velocidadeMaxima = null
    ): string|float {
        return "Acelerar: {$aceleracao} - Velocidade: {$velocidadeMaxima}";
    }
}

$uno = new Carro(marca: 'Fiat', cor: 'Preto',);

// parâmetro como string
echo $uno->andar(velocidadeMaxima: '110', aceleracao: '6');


echo '<br>';

// permite velocidadeMaxima = null
echo $uno->andar(aceleracao: '6');
