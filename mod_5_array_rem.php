<?php

$contas = [
    '111' => ['nome' => 'weverton', 'saldo' => 2000],
    '222' => ['nome' => 'laura', 'saldo' => 2500],
    '333' => ['nome' => 'pedro', 'saldo' => 1750]
];

foreach($contas as $cpf => $conta){
    ['nome' => $nome, 'saldo' => $saldo] = $conta;
    echo "{$nome} - {$saldo}" . PHP_EOL;
}

unset($contas['222']);

echo "************************" . PHP_EOL;

foreach($contas as $cpf => $conta){
    ['nome' => $nome, 'saldo' => $saldo] = $conta;
    echo "{$nome} - {$saldo}" . PHP_EOL;
}

echo "************************" . PHP_EOL;

$idades = [12, 45, 9, 35, 27];

foreach($idades as $i){
    echo $i . PHP_EOL;
}

unset($idades[2]);

echo "************************" . PHP_EOL;

foreach($idades as $i){
    echo $i . PHP_EOL;
}