<?php
/*
class Carro
{
    public function andar(int $aceleracao, int $velocidadeMaxima)
    {
        echo "Acelerar: {$aceleracao} - Velocidade: {$velocidadeMaxima}";
    }
}

$uno = new Carro;
$uno->andar(5, 110);
*/


class Carro
{

    public function __construct(
        protected string $marca,
        protected string $cor
    ) {
    }

    public function andar(int $aceleracao, int $velocidadeMaxima)
    {
        echo "Acelerar: {$aceleracao} - Velocidade: {$velocidadeMaxima}";
    }
}

$uno = new Carro(marca: 'Fiat', cor: 'Preto');
var_dump($uno);
$uno->andar(velocidadeMaxima: 110, aceleracao: 5);
