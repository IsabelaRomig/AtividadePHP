<?php

$primeiranota = 8;
$segundanota = 9;
$terceiranota = 8;

$soma = $primeiranota + $segundanota + $terceiranota;

$média = $soma/3;

echo "Primeira nota: ", $primeiranota, "<br>";
echo "Segunda nota: ", $segundanota, "<br>";
echo "Terceira nota: ", $terceiranota, "<br>";
echo "Nota final= ", floor ($média);