<?php

$idades = [43,76,23,18,34,74];

//Função do PHP que permite atribuir valores de um array a múltiplas variáveis
list($idadeJoao, $idadeMaria, $idadePedro, $idadeIsabela) = $idades;

echo "João tem $idadeJoao anos.".PHP_EOL;
echo "Maria tem $idadeMaria anos.".PHP_EOL;
echo "Pedro tem $idadePedro anos.".PHP_EOL;
echo "Isabela tem $idadeIsabela anos.".PHP_EOL.PHP_EOL;

//Mesma função que a anteriormente porém pulando determinados índices do array
list(,$idadeJoao,,$idadePedro,,$idadeMaria) = $idades;
echo "João agora tem $idadeJoao anos.".PHP_EOL;
echo "Pedro agora tem $idadePedro anos.".PHP_EOL;
echo "Maria agora tem $idadeMaria anos.".PHP_EOL;

$letras = [

    'alfa' => 'a',
    'beta' => 'b',
    'gamma' => 'g',
    'pi' => 'p',
    'delta' => 'd'

];

//Mesma função porém demonstrando a capacidade de especificar os índices que se deseja acessar
list('alfa' => $primeiro, 'delta' => $segundo, 'gamma' => $terceiro) = $letras;

echo "O primeiro é $primeiro, o segundo é $segundo e o terceiro é $terceiro.".PHP_EOL;

//Mesma função com uma sintaxe diferente
['delta' => $primeiro, 'pi' => $segundo, 'alfa' => $terceiro] = $letras;

echo "O primeiro é $primeiro, o segundo é $segundo e o terceiro é $terceiro.".PHP_EOL;