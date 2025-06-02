<?php



echo        '<h1>Area di un cerchio</h1>' . PHP_EOL;
echo        '<p>Inserisci il raggio del cerchio.' . PHP_EOL;
echo        '<br> Clicca su "calcola" per visualizzare il risultato.</p>' . PHP_EOL;
echo        '<form action="output.php" method="get" >' . PHP_EOL;
echo            '<label for="raggio">Raggio:</label>' . PHP_EOL;
echo            '<br>' . PHP_EOL;
echo            '<input type="text" id="raggio" name="raggio">' . PHP_EOL;
echo            '<br>' . PHP_EOL;
echo            '<input type="hidden" id="calcolo" name="calcolo" value="cerchio">' . PHP_EOL;
echo            '<br>' . PHP_EOL;
echo            '<input type="submit" value="Calcola">' . PHP_EOL;
echo        '</form>' . PHP_EOL;


           