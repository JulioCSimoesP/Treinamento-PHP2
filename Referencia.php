<?php

$nome = "João";
echo "Aqui o nome $nome está normal.".PHP_EOL;

//Função que altera o valor de uma variável por referência
function nomeMaiusculo(string &$entrada)
{

    $entrada = mb_strtoupper($entrada);

}

nomeMaiusculo($nome);
echo "Aqui o nome $nome está completamente em maiúsculo.".PHP_EOL;