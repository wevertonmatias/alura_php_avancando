<?php

function exibirMensagem($message)
{
    echo $message . PHP_EOL;
}

function sacar($conta, $valor){
    if($valor > $conta['saldo']){
        exibirMensagem("Valor maior que saldo");
    }else{
        $conta['saldo'] -= $valor;
    }
    return $conta;
}

$conta1 = [
    'nome' => 'Weverton',
    'saldo' => 1000
];

$conta2 = [
    'nome' => 'Maria',
    'saldo' => 300
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


$contas['111.111.111-11'] = sacar($contas['111.111.111-11'], 500);
$contas['222.222.222-22'] = sacar($contas['222.222.222-22'], 500);


foreach($contas as $key => $conta){
    exibirMensagem($contas[$key]['nome']." => " .$contas[$key]['saldo']);
}