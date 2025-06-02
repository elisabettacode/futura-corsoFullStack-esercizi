<?php

require_once('allestimento.php');

$pagine3 = array (
    'Title' => 'Modello auto',
    'h1'=> 'Scegli la tua nuova auto',
    'h2'=> '3- Calcola il prezzo',
    'Contenuto' => 'Hai selezionato il modello {{ModelloSelezionato}} con allestimento {{AllestimentoSelezionato}}. 
        <br> Il prezzo della tua nuova auto è: {{Prezzo}}'
);

$prezzi = array (
    'Bz' => array (
        'base' => '13000 €',
        'standard'=> '16000 €',
        'lusso' => '21000 €'
    ),

    'Hy'=> array (
        'base' => '16000 €',
        'standard'=> '20000 €',
        'lusso' => '24000 €'
    ),

    'Sp'=> array (
        'base' => '20000 €',
        'standard'=> '25000 €',
        'lusso' => '33000 €'
    )
);

$contenuto3 = file_get_contents('output.html');

foreach ($pagine3 as $key => $value) {

    $contenuto3 = str_replace('{{'. $key .'}}', $value, $contenuto3);
 };

$contenuto3 = str_replace('{{ModelloSelezionato}}', $modelli[$_GET['modello']], $contenuto3); 
$contenuto3 = str_replace('{{AllestimentoSelezionato}}', $allestimenti[$_GET['allestimento']], $contenuto3); 


$allestimento =  $_GET['allestimento'];

$listino = $prezzi[$modello];

$contenuto3 = str_replace('{{Prezzo}}', $listino[$allestimento], $contenuto3 );
    
echo $contenuto3;



