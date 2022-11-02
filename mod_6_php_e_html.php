<?php

$contas = [
    '111' => ['nome' => 'weverton', 'saldo' => 2000],
    '222' => ['nome' => 'laura', 'saldo' => 2500],
    '333' => ['nome' => 'pedro', 'saldo' => 1750]
];
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Com HTML</title>
</head>
<body>
    <ul>
    <?php foreach($contas as $cpf => $conta){ ?>
        <li>
            <p>CPF: <?= $cpf?><p>
            <p>Nome: <?= $conta['nome']?></p>
            <p>Saldo: <?= $conta['saldo']?></p>
        </li>
        
    <?php } ?>
    </ul>
</body>
</html>