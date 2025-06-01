<?php

require_once('index.php');




$pagine2 = array (
    'Title' => 'Modello auto',
    'h1'=> 'Scegli la tua nuova auto',
    'h2'=> '2- Seleziona un allestimento',
    'Contenuto' => 'Hai selezionato il modello {{ModelloSelezionato}}. Scegli un allestimento e clicca su Confema per proseguire.',
    'Label' => 'Allestimento:'
);

$allestimenti = array ( 
    'base' =>'Base',
    'standard' => 'Standard',
    'lusso' => 'Lusso'
);

if (!isset($_GET['allestimento']) && empty($_GET['allestimento'])) {

$contenuto2 = file_get_contents('allestimento.html');

foreach ($pagine2 as $key => $value) {

    $contenuto2 = str_replace('{{'. $key .'}}', $value, $contenuto2);

};

$contenuto2 = creaOpzioni('{{OpzioniSelect}}', $allestimenti, $contenuto2);

$modello = $_GET['modello'];

$contenuto2 = str_replace('{{Selezione1}}', $modello, $contenuto2);
$contenuto2 = str_replace('{{ModelloSelezionato}}', $modelli[$modello], $contenuto2); 

 echo $contenuto2;

};


