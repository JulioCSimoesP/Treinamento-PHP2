<?php

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

    foreach ($contas as $cpf => $conta) {

        echo "$cpf $conta[titular] $conta[saldo]".PHP_EOL;

    }