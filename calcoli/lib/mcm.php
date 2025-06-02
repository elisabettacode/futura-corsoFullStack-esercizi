<?php

 echo '<h1>Minimo Comune Multiplo tra due numeri</h1>' . PHP_EOL;
    echo '<p>Inserisci i due numeri.' . PHP_EOL;
    echo '<br> Clicca su "Calcola" per proseguire.</p>' . PHP_EOL;
    echo '<form action="output.php" method="get" >' . PHP_EOL;
    echo '<label for="num1_">Numero 1:</label>' . PHP_EOL;
    echo '<br>' . PHP_EOL;
    echo '<input type="text" id="num1_" name="num1_">' . PHP_EOL;
    echo '<br>' . PHP_EOL;
    echo '<label for="num2_">Numero 2:</label>' . PHP_EOL;
    echo '<br>' . PHP_EOL;
    echo '<input type="text" id="num2_" name="num2_">' . PHP_EOL;
    echo '<br>' . PHP_EOL;
    echo '<input type="hidden" id="calcolo" name="calcolo" value="mcm">' . PHP_EOL;
    echo '<br>' . PHP_EOL;
    echo '<input type="submit" value="Calcola">' . PHP_EOL;
    echo '</form>' . PHP_EOL;