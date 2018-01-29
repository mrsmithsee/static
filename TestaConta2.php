<?php
require 'Conta2.php';

echo "Contador: " . Conta::$contador . PHP_EOL;
new Conta();
new Conta();
new Conta();
echo "Contador: " . Conta::$contador . PHP_EOL;

$x = new Conta();
$x->numero = 1;
$x->saldo = 1100110;

$y = new Conta();
$y->numero = 2;
$y->saldo = 2200222;

$x->mostraDados();
 ?>
