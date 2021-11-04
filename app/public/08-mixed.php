<?php

class Carro{

    public function __construct(
        protected string|Marca $marca,
        protected string $cor,
        protected int $velocidadeAtual,
        protected int $ano,
        protected string $modelo,
    )
    {
        
    }


    /**
     * mixed -> array|bool|callable|int|float|null|object|resource|string
     * 
     * @param string $nomePropriedade
     * return mixed
     */
    public function info(string $nomePropriedade) : mixed
    {
        return $this->$nomePropriedade;
    }
    
}


$uno = new Carro('Fiat', 'Preta', 110, 2020, 'Mille');

echo $uno->info('velocidadeAtual');
echo '<br>';
echo $uno->info('ano');