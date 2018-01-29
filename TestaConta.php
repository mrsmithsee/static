<?php
require 'Conta.php';

echo "Contador: " . Conta::$cont . PHP_EOL;

//$conta1 = new Conta();  // com o construtor private da erro essa chamada de fora do objeto
// classe::metodo
$conta1 = Conta::criaConta();
$conta1->saldo = 1000;

echo "Contador: " . Conta::$cont . "   Numero: " . $conta1->numero . "   Saldo: " . $conta1->saldo . PHP_EOL;

$conta2 = Conta::criaConta();
$conta2->saldo = 2000;

echo "Contador: " . Conta::$cont . "   Numero: " . $conta2->numero . "   Saldo: " . $conta2->saldo . PHP_EOL;

// Fabrica de Objetos: tem classes que nao precisamos fazer new para criar objeto.
// Temos método que passamos parâmetros e o objeto é criado.
// Exemplo: Carbon::createFromDate(1990, 10, 3) já chamamos o método passando
// os parametros. Fazendo construtor privado impedimos que executem new na classe,
// para isso temos de implementar metodo para criação do objeto.
