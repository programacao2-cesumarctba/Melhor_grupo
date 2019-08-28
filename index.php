<?php

require __DIR__ . '/vendor/autoload.php';

$teste = new Aula\ContaCorrente(1000, 0.5);
$teste->totaljuros();
$teste->numConta = "1010";
echo "<pre>";
print_r($teste);
echo "</pre>";