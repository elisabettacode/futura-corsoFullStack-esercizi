<?php

/*Scrivere un programma che calcoli il minimo comune multiplo di due numeri.
Scrivere una libreria con una funzione per il calcolo dell'MCM e una libreria per l'output, e mettere tutto insieme in un file index.php 
(per le librerie usare require) che preveda due valori di default oppure valori specificati tramite un file di configurazione 
(per la configurazione usare include). */


require_once('lib/funzione_mcm.php');
require_once('lib/output.php');

include_once('config.php');

echo '<!DOCTYPE html>' . PHP_EOL;
echo '<html lang="it">' . PHP_EOL;
echo '<head>' . PHP_EOL;
echo '<title>Minimo Comune Multiplo</title>' . PHP_EOL;
echo '<meta charset="UTF-8">' . PHP_EOL;
echo '<meta rel="stylesheet" href="style.css">' . PHP_EOL;
echo '</head>' . PHP_EOL;
echo '<body>' . PHP_EOL;

if (!isset($_GET['num1_']) && !isset($_GET['num2_'])) {

    echo '<h1>Minimo Comune Multiplo tra due numeri</h1>' . PHP_EOL;
    echo '<p>Inserisci i due numeri.' . PHP_EOL;
    echo '<br> Clicca su "Calcola" per proseguire.</p>' . PHP_EOL;
    echo '<form action="index.php" method="get" >' . PHP_EOL;
    echo '<label for="num1_">Numero 1:</label>' . PHP_EOL;
    echo '<br>' . PHP_EOL;
    echo '<input type="text" id="num1_" name="num1_">' . PHP_EOL;
    echo '<br>' . PHP_EOL;
    echo '<label for="num2_">Numero 2:</label>' . PHP_EOL;
    echo '<br>' . PHP_EOL;
    echo '<input type="text" id="num2_" name="num2_">' . PHP_EOL;
    echo '<br>' . PHP_EOL;
    echo '<input type="submit" value="Calcola">' . PHP_EOL;
    echo '</form>' . PHP_EOL;

} else {

    if (isset($_GET['num1_']) && !empty($_GET['num1_']) && isset($_GET['num2_']) && !empty($_GET['num2_'])) {

        $num1_ = $_GET['num1_'];
        $num2_ = $_GET['num2_'];

        scrivi('Il minimo comune multiplo tra i numeri ' .$num1_. ' e ' .$num2_. ' è:' . calcola_mcm($num1_, $num2_));
    }

}

echo '</body>' . PHP_EOL;
echo '</html>' . PHP_EOL;
