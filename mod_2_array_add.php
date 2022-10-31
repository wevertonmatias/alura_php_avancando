<?php

$idades = [20,25];

$idades[] = 30;
$idades[] = 45;

// foreach($idades as $idade){
//     echo $idade . PHP_EOL;
// }

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


    
$contas = [
    "111.111.111-11" =>$conta1, 
    "222.222.222-22" =>$conta2, 
    "333.333.333-33" => $conta3
];

$contas[] = [
    'nome' => 'Carla',
    'saldo' => 1500
];


foreach($contas as $key => $conta){

    echo "{$key} => " .$contas[$key]['nome']. PHP_EOL;
}