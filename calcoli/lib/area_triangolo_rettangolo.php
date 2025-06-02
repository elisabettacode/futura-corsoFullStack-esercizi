<?php

echo        '<h1>Area di un triangolo rettangolo</h1>' . PHP_EOL;
echo        '<p>Inserisci le dimensioni del triangolo rettangolo.' . PHP_EOL;
echo        '<br> Clicca su "Calcola" per proseguire.</p>' . PHP_EOL;
echo        '<form action="output.php" method="get">' . PHP_EOL;
echo            '<label for="base">Base:</label>' . PHP_EOL;
echo            '<br>' . PHP_EOL;
echo            '<input type="text" id="base" name="base">' . PHP_EOL;
echo            '<br>' . PHP_EOL;
echo            '<label for="altezza">Altezza:</label>' . PHP_EOL;
echo            '<br>' . PHP_EOL;
echo            '<input type="text" id="altezza" name="altezza">' . PHP_EOL;
echo            '<br>' . PHP_EOL;
echo            '<input type="hidden" id="calcolo" name="calcolo" value="triangolo_rettangolo">' . PHP_EOL;
echo            '<br>' . PHP_EOL;
echo            '<input type="submit" value="Calcola">' . PHP_EOL;
echo        '</form>' . PHP_EOL;
