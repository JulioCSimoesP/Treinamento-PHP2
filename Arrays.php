<?php

//  Formas de criar um array.
    $listaDeIdades = array(18,20,32,15,35,45,25,29);
    $listaDePesos = [60,50,78,49,99,100,105,76];

//  Exibindo todos os elementos de um array.
    for($i = 0 ; $i < count($listaDeIdades) ; $i++) {

        echo $listaDeIdades[$i].PHP_EOL;
        echo $listaDePesos[$i].PHP_EOL.PHP_EOL;

    }