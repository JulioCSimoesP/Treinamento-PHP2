<?php

$frutas = ['banana','maçã','laranja','morango','cereja'];
$temporario = "variável temporária";

foreach ($frutas as $item){

    echo $item.PHP_EOL;

}

echo PHP_EOL;

//Função do PHP que exclui variáveis e índices de arrays da memória
unset($frutas[3]);

foreach ($frutas as $item){

    echo $item.PHP_EOL;

}

echo PHP_EOL;

//Função do PHP que pode ser utilizada para reindexar os valores de um array
$frutas= array_values($frutas);
echo $frutas[3];

unset($temporario);