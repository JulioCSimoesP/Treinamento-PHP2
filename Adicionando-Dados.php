<?php

    $vetor = [45,32,19,789,65,132,45];

//  A seguir há várias formas de adicionar elementos a um array.
    $vetor[7] = 48;
    echo $vetor[count($vetor) - 1].PHP_EOL;

    $vetor[count($vetor) - 1] = 29;
    echo $vetor[count($vetor) - 1].PHP_EOL;

    $vetor[] = 39;
    echo $vetor[count($vetor) - 1].PHP_EOL;