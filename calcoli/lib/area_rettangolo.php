<?php



echo        '<h1>Area di un rettangolo</h1>' . PHP_EOL;
echo        '<p>Inserisci le dimensioni del rettangolo.' . PHP_EOL;
echo        '<br> Clicca su "Calcola" per visualizzare il risultato.</p>' . PHP_EOL;
echo        '<form action="output.php" method="get">' . PHP_EOL;
echo            '<label for="a">Lato a:</label>' . PHP_EOL;
echo            '<br>' . PHP_EOL;
echo            '<input type="text" id="a" name="a">' . PHP_EOL;
echo            '<br>' . PHP_EOL;
echo            '<label for="b">Lato b:</label>' . PHP_EOL;
echo            '<br>' . PHP_EOL;
echo            '<input type="text" id="b" name="b">' . PHP_EOL;
echo            '<br>' . PHP_EOL;
echo            '<input type="hidden" id="calcolo" name="calcolo" value="rettangolo">' . PHP_EOL;
echo            '<br>' . PHP_EOL;
echo            '<input type="submit" value="Calcola">' . PHP_EOL;
echo        '</form>' . PHP_EOL;

