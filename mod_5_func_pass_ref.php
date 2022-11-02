<?php

function depositar(array $conta, float $valor)
{
    $conta['saldo'] += $valor;
}

function depositarPorRef(array &$conta, float $valor)
{
    $conta['saldo'] += $valor;
}


$conta = [
    'nome' => 'Weverton',
    'saldo' => 1500
];

depositar($conta, 1500);

print_r($conta);

depositarPorRef($conta, 500);

print_r($conta);