<?php

#Scrivere un programma che chieda all'utente di scegliere fra alcuni modelli di auto, 
#poi successivamente consenta di selezionare un allestimento (base, standard o lusso) 
#e infine nella terza pagina visualizzi il prezzo definitivo dell'auto. 
#Utilizzare tre coppie di file PHP e HTML in una logica di templating.



function creaOpzioni ($placeholder, $elenco, $contenuto ) {

   $opzione = '';

   foreach ($elenco as $key => $value) {

    $opzione = $opzione . '<option value="' . $key . '">' . $value . '</option>';
   }

   return str_replace($placeholder, $opzione, $contenuto);

}


$pagine = array (
    'Title' => 'Modello auto',
    'h1'=> 'Scegli la tua nuova auto',
    'h2'=> '1- Scegli il modello',
    'Contenuto' => 'Scegli il modello della tua nuova auto.',
    'Label' => 'Modello:'
);

$modelli = array ( 
    'Bz' => 'CityBenzina',
    'Hy' => 'CityHybrid',
    'Sp' => 'BerlinaSport'
    );


if (!isset($_GET['modello']) && empty($_GET['modello'])) {

$contenuto = file_get_contents('index.html');

foreach ($pagine as $key => $value) {

    $contenuto = str_replace('{{'. $key .'}}', $value, $contenuto);

};

$contenuto = creaOpzioni('{{OpzioniSelect}}', $modelli, $contenuto);

echo $contenuto;

};