<?php

function Primo($numero)
{
    if ($numero <= 1) {
        return false; 
    }

    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }

    return true;
}

echo "Vendo se os números são primos: <br>";
echo "<br>";
echo "6 é primo? " . (Primo(6) ? "Sim" : "Não") . "<br>";
echo "25 é primo? " . (Primo(25) ? "Sim" : "Não") . "<br>";
echo "15 é primo? " . (Primo(15) ? "Sim" : "Não") . "<br>";
echo "2 é primo? " . (Primo(2) ? "Sim" : "Não") . "<br>";