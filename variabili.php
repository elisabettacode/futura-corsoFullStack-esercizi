<?php

    $a = 10;

    $t = 'ciao';

    echo $a . '<br>';
    echo $t . '<br>';

    $b = 20;

    $c = $a + $b;    //somma
    $d = $a - $b;    //differenza
    $e = $a * $b;    //prodotto
    $f = $a / $b;    //divisione
    $G = $a % $b;    //modulo

    echo "$c è la somma di $a e $b <br>" . PHP_EOL;                     //i doppi apici indicano un template, quindi interpretano le variabili, questo utilizza risorse per il pursin
    echo '$c è la somma di $a e $b <br>' . PHP_EOL;                       //i singoli apici indicano solo stringa
    echo $c . ' è la somma di ' . $a . ' e ' . $b . '<br>' . PHP_EOL;     //scrittura con concatenazioni più corretta e leggibile