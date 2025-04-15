<?php

function EncontrarMaiorNumero($numeros){

    $maior = $numeros[0]; 

    for ($i = 1; $i < count($numeros); $i++) {
        if ($numeros[$i] > $maior) {
            $maior = $numeros[$i]; 
        }
    }

    return $maior;
}

$ArrayDeNumeros = [20, 6, 26, 8, 50];
$maiorNumero = EncontrarMaiorNumero($ArrayDeNumeros);


echo "O maior número é: " . $maiorNumero;