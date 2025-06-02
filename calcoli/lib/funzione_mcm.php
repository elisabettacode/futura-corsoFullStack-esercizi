<?php

function calcola_mcm ($x, $y) {

    if ($x == 0 || $y == 0) {

        return 0;

    } else {

        $max = max($x, $y);
        $min = min($x, $y);
        $multiplo = $max;
        
        for ($i =1; ($multiplo % $min) != 0; $i++) {
           $multiplo *= $i;
        }

        return $multiplo;
    };
};


