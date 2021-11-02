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
    public function andar(int $aceleracao, int $velocidadeMaxima)
    {
        echo "Acelerar: {$aceleracao} - Velocidade: {$velocidadeMaxima}";
    }
}

$uno = new Carro;
$uno->andar(velocidadeMaxima: 110, aceleracao: 5);