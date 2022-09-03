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
        ],
        456873 => [
            'titular' => 'Sandra',
            'saldo' => 1500
        ]

    ];

//  Exemplo de subrotina.
    function exibeMensagem(string $mensagem)
    {

        echo $mensagem.PHP_EOL;

    }

//  Exemplos de funções.
    function saca(array $conta, float $valorASacar): array
    {

        if($valorASacar > $conta['saldo']) {

            exibeMensagem("Não foi possível realizar a operação. Seu saldo é insuficiente.");

        } else {

            $conta['saldo'] -= $valorASacar;
            echo exibeMensagem("Saque realizado com sucesso. Seu saldo atual é de $conta[saldo]");

        }

        return $conta;

    }

    function deposita(array $conta, float $valorASacar): array
    {

        if($valorASacar < 0) {

            exibeMensagem("Não foi possível realizar a operação. Valor de deposito inválido.");

        } else {

            $conta['saldo'] += $valorASacar;
            echo exibeMensagem("Deposito realizado com sucesso. Seu saldo atual é de {$conta['saldo']}");

        }

        return $conta;

    }

//  Utilização de funções para alterar valores de variáveis fora de seu escopo.
    $contas[123456] = saca($contas[123456], 500);
    $contas[456873] = deposita($contas[456873], 2000);

    foreach ($contas as $cpf => $conta) {

        echo "$cpf $conta[titular] $conta[saldo]".PHP_EOL;

    }
