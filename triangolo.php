<?php

 //Scrivere una pagina web che riceva in input via GET tre numeri a, b e c 
 //e calcoli l'area del triangolo rettangolo avente rispettivamente a e b come cateti e c come ipotenusa.
 // Area = (a * b) / 2   Ipotenusa = (a**2 + b**2)**(1/2)

    $a = $_GET["a"] ;

    $b = $_GET["b"] ;

    $c = sqrt($a**2 + $b**2) ;

    $area = ($a * $b) / 2 ;


    echo '<DOCTYPE!html>' . PHP_EOL;

    echo '<html lang=it>' . PHP_EOL;

    echo '<head>' . PHP_EOL;
    echo '<title>Triangolo Rettangolo</title>' . PHP_EOL;
    echo '<meta charset="UTF-8">' . PHP_EOL;
    echo '<link rel="stylesheet" href="style.css">' . PHP_EOL;
    echo '</head>' . PHP_EOL;

    echo '<body>' . PHP_EOL;
    echo '<h1>Triangolo rettangolo</h1>' . PHP_EOL;
    echo '<p>Il triangolo rettangolo, che ha come cateti a = ' . $_GET["a"] . ' e b = ' . $_GET["b"] . ' , ha ipotenusa c = ' . round($c , 1) . " e un'area di " . round($area , 1).  '</p>' . PHP_EOL;
    echo '</body>' . PHP_EOL;

    echo '</html>' . PHP_EOL;