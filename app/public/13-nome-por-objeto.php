<?php

namespace App\Models;

class Carro{}

echo Carro::class;

$uno = new Carro;

echo "<br>";
echo get_class($uno);

// PHP 8
echo "<br>";
echo $uno::class;


// cria a partir da Class que gerou $uno
$uno2 = new $uno;


echo "<br>";
$nomeClasse =  $uno::class;

$uno3 = new $nomeClasse;

echo "<br>";
var_dump($uno, $uno2, $uno3);
