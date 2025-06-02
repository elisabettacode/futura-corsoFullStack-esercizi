<?php
#Scrivere un programma che includa tutte le librerie degli esercizi precedenti e sia organizzato in modo che il file index.php 
#faccia selezionare all'utente quale calcolo svolgere, poi prevedere un file php per ogni calcolo nel quale chiedere all'utente 
#gli input necessari, infine prevedere un file che visualizzi l'output dell'operazione.



echo '<!DOCTYPE html>' . PHP_EOL;
echo '<html lang="it">' . PHP_EOL;
echo '<head>' . PHP_EOL;
echo '<title>Calcoli</title>' . PHP_EOL;
echo '<meta charset="UTF-8">' . PHP_EOL;
echo '<meta rel="stylesheet" href="style.css">' . PHP_EOL;
echo '</head>' . PHP_EOL;
echo '<body>' . PHP_EOL;

if (!isset($_GET['calcolo'])) {

    echo '<h1>Scegli cosa vuoi calcolare</h1>' . PHP_EOL;
    echo '<p>Seleziona il calcolo tra quelli disponibili.' . PHP_EOL;
    echo '<br> Clicca su "Invia" per proseguire.</p>' . PHP_EOL;
    echo '<form action="index.php" method="get" >' . PHP_EOL;
    echo '<label for="calcolo">Scegli il calcolo:</label>' . PHP_EOL;
    echo '<br>' . PHP_EOL;
    echo '<select id="calcolo" name="calcolo">' . PHP_EOL;
    echo '<option value="triangolo_rettangolo">Area di un triangolo rettangolo</option>' . PHP_EOL;
    echo '<option value="rettangolo">Area di un rettangolo</option>' . PHP_EOL;
    echo '<option value="cerchio">Area di un cerchio</option>' . PHP_EOL;
    echo '<option value="mcm">Minimo comune multiplo tra due numeri</option>' . PHP_EOL;
    echo '</select>' . PHP_EOL;
    echo '<br>' . PHP_EOL;
    echo '<input type="submit" value="invia">' . PHP_EOL;
    echo '</form>' . PHP_EOL;
} else {

    if (isset($_GET['calcolo']) && !empty($_GET['calcolo'])) {

        $calcolo = $_GET['calcolo'];

        switch ($calcolo) {

            case 'cerchio':

                require('lib/area_cerchio.php');
                
                break;

            case 'triangolo_rettangolo':

                require('lib/area_triangolo_rettangolo.php');
                
                break;

            case 'rettangolo':

                require('lib/area_rettangolo.php');
                
                break;

            case 'mcm':

                require('lib/mcm.php');
                
                break;
        }
    }
    
}    
echo '</body>' . PHP_EOL;
echo '</html>' . PHP_EOL;
