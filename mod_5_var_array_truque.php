<?php

$contas = [
    ['nome' => 'weverton', 'saldo' => 2000],
    ['nome' => 'laura', 'saldo' => 2500]
];

// foreach($contas as $conta){
//     echo "Títular {$conta['nome']} e saldo {$conta['saldo']}" . PHP_EOL;
// }

foreach($contas as $conta){
    list('nome' => $nome, 'saldo' => $saldo) = $conta;
    ['nome' => $nome, 'saldo' => $saldo] = $conta;
    echo "Títular $nome e saldo $saldo" . PHP_EOL;
}