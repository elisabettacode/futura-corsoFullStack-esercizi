<?php

#Scrivere un programma che consenta di elencare una serie di voci di spesa, composte da descrizione e importo,
# e visualizzi oltre alla lista anche il totale degli importi. Utilizzare un solo file PHP che chiama sé stesso, 
#utilizzare un template per l'HTML, utilizzare il salvataggio serializzato su file per la persistenza dei dati.

$dbpath = 'spese.db';
$database = fopen($dbpath, 'a+');
fclose($database);

$lista = [];
$str_lista= '';
$totale = 0;
$file_content = file_get_contents($dbpath);

if (!empty($file_content) ) {
    $lista = unserialize($file_content);
} 

if(isset($_REQUEST['nome']) && !empty($_REQUEST['nome'])
  &&isset($_REQUEST['importo']) && !empty($_REQUEST['importo'])) {
        $lista[] = [$_REQUEST['nome']=>$_REQUEST['importo']];
        file_put_contents($dbpath, serialize($lista));
}

foreach ($lista as $key => $value) {
    foreach ($value as $k => $v) {
        $str_lista .= '<li>' . $k . ' ' . $v . '</li>';
        $totale += (float)$v;
    }
}

$contenuto = file_get_contents('template.html');
$contenuto = str_replace('{{lista}}', $str_lista, $contenuto);
$contenuto = str_replace('{{totale}}', $totale, $contenuto);
echo $contenuto;