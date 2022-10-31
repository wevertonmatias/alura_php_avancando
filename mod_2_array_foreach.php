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

// $contas = [$conta1, $conta2, $conta3];

// foreach($contas as $conta){
    //     echo $conta['nome'] . PHP_EOL;
    // }
    
$contas2 = [
    11111111111 =>$conta1, 
    22222222222 =>$conta2, 
    33333333333 => $conta3
];
foreach($contas2 as $key => $conta){

    echo "{$key} => " .$contas2[$key]['nome']. PHP_EOL;
}