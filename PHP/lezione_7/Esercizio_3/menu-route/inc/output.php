<?php

$primo = $_POST['primo'];
$secondo = $_POST['secondo'];
$dolce = $_POST['dolce'];

   
$totale = $piatti[$primo]['prezzo'] + $piatti[$secondo]['prezzo'] + $piatti[$dolce]['prezzo'];

$risultato = $primo . '<br>' . $secondo . '<br>' . $dolce . '<br>Totale del tuo ordine: ' . $totale . ' €';

$contenuto = str_replace ('{{risultato}}', $risultato, $contenuto);
