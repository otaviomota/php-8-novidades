<?php


class Marca implements stringable
{
    public function __construct(
        public string $nome
    ) {}


    // método obrigatório
    public function __toString(): string
    {
        return $this->nome;
    }
}


class Carro
{

    public function __construct(
        protected stringable $marca,
        protected string $cor,
        protected int $velocidadeAtual,
        protected int $ano,
        protected string $modelo,
    ) {
    }


    /**
     * mixed -> array|bool|callable|int|float|null|object|resource|string
     * 
     * @param string $nomePropriedade
     * return mixed
     */
    public function info(string $nomePropriedade): mixed
    {
        return $this->$nomePropriedade;
    }
}


// $uno = new Carro('Fiat', 'Preta', 110, 2020, 'Mille');

// echo $uno->info('velocidadeAtual');
// echo '<br>';
// echo $uno->info('ano');


$palio = new Carro(new Marca('Fiat'), 'Preta', 110, 2020, 'Way');
echo '<br>';
echo $palio->info('marca');
