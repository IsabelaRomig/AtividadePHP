<?php
$número  = 5;
$contador = 1;

while ($contador <= 10) {
  $resultado = $número  * $contador;
  echo $número   . " x " . $contador . " = " . $resultado, " ", "<br>";
  $contador++;
}