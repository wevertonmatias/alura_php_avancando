<?php

$teste = [
    1 => 'a',
    '1' => 'b',
    'teste' => 'blabla',
    1.5 => 'c',
    true => 'd',
    'teste2' => 'chacha'
];

foreach($teste as $valor){
    echo $valor . PHP_EOL;
}