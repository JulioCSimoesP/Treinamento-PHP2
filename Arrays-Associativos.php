<?php

//  Associação de arrays
    $contas = [

        123456 => [
            'titular' => 'João',
            'saldo' => 1000
        ],
        789456 => [
            'titular' => 'Maria',
            'saldo' => 2000
        ],
        987321 => [
            'titular' => 'Felipe',
            'saldo' => 5000
        ]

    ];

//  Método alternativo de explorar os elementos de um array.
    foreach ($contas as $cpf => $conta) {

        echo "$cpf $conta[titular] $conta[saldo]".PHP_EOL;

    }