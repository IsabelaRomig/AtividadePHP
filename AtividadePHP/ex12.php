<?php

function contarPares($numeros)
{
    $contadorDePares = 0; 

    foreach ($numeros as $numero) {
        if ($numero % 2 == 0) {
            $contadorDePares++;
        }
    }

    return $contadorDePares;
}

$ArrayComDezNumeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$quantidadeDePares = contarPares($ArrayComDezNumeros);

echo "No array, existem " . $quantidadeDePares . " números pares";