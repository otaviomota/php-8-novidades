<?php

#[Nome('entidade')]
class Carro
{
    #[Validacao('max', 110)]
    public int $velocidade;
}

#[Attribute]
class Validacao
{
    public function __construct(
        public string $regra,
        public int $valor
    ) {
    }

    public static function validar(object $objetoparaValidar)
    {
        $refletionClass = new ReflectionClass($objetoparaValidar::class);

        foreach ($refletionClass->getProperties() as $propriedade) {
            $nomePropriedade = $propriedade->getName();

            // self::class pra pegar só a validação no annotation
            $atributos = $propriedade->getAttributes(self::class);

            foreach ($atributos as $atributo) {
                $instaciaValidacao = $atributo->newInstance();

                $nomeRegra = $instaciaValidacao->regra;


                $mensagemValidacao = Regras::$nomeRegra(
                    $objetoparaValidar->$nomePropriedade,
                    $instaciaValidacao->valor
                );

                echo "$nomePropriedade: $mensagemValidacao <br>";
            }
        }
    }
}


class Regras
{
    public static function max(int $valor, int $maximo): string
    {
        if ($valor > $maximo) {
            return 'Valor maior que o máximo';
        }

        return 'Valor menor que o máximo';
    }
}


$uno = new Carro;
$uno->velocidade = 230;

Validacao::validar($uno);

$uno->velocidade = 30;

Validacao::validar($uno);