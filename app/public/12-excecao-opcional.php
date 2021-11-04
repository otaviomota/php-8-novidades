<?php


// $valor = 1;

try {

    echo $valor ?? throw new Exception;
    
} catch (Exception) {
    echo "Ocorreu um erro!";
}