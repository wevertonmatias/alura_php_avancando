<?php

$conta1 = [
    'nome' => 'Weverton',
    'saldo' => 1000
];

$conta2 = [
    'nome' => 'Maria',
    'saldo' => 10000
];

$conta3 = [
    'nome' => 'Paulo',
    'saldo' => 1500
];

$contas = [$conta1, $conta2, $conta3];

for($i=0; $i < count($contas); $i++){
    echo $contas[$i]['nome'] . PHP_EOL;
};