<?php

$conta = [
    'nome' => 'Weverton',
    'saldo' => 1500
];

// echo "Olá $conta[nome] seu saldo é $conta[saldo].".PHP_EOL;
echo "Olá {$conta[nome]} seu saldo é {$conta['saldo']}.".PHP_EOL;