<?php

// precedência

$a = 1;
$b = 2;


//php 8 faz a soma antes
echo "O valor de a+b é: " . $a + $b;



// FUNÇÕES NOVAS DE STRING
var_dump(str_contains('Otavio', 'avi'));

var_dump(str_starts_with('Otavio', 'Ot'));
var_dump(str_ends_with('Otavio', 'io'));