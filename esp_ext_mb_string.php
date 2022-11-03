<?php

$mensagem = "Teste de integração com API";

echo strlen($mensagem) . PHP_EOL;
echo mb_strlen($mensagem) . PHP_EOL;
echo strtoupper($mensagem) . PHP_EOL;
echo mb_strtoupper($mensagem) . PHP_EOL;
echo mb_convert_encoding($mensagem, "ISO-8859-1", "UTF-8") . PHP_EOL;
echo mb_convert_case($mensagem, MB_CASE_TITLE) . PHP_EOL;