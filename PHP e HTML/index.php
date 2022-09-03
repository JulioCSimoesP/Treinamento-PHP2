<?php

require_once 'Contas.php';
require_once 'Funcoes.php';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Banco Milionário</title>
</head>

<body>
    <h1>Banco Milionário</h1><br><br>
    <h2>Contas cadastradas:</h2><br>
    <dl>
        <?php foreach ($contas as $cpf => $conta) {
            exibeConta($conta,$cpf);
        } ?>
    </dl>
</body>

</html>
