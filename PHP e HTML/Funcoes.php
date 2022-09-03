<?php

function exibeConta(array $conta, string $cpf)
{

    echo "<dt><h3>ID: $conta[id]</h3></dt>
          <dd>Nome: $conta[titular]</dd>
          <dd>Agência: $conta[agencia]</dd>
          <dd>CPF: $cpf</dd>
          <dd>Saldo: $conta[saldo]</dd>";

}