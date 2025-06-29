<?php

#Scrivere un programma che consenta di compilare una classifica indicando nome della squadra e punteggio, 
#e che oltre alla classifica visualizzi anche quale squadra ha più punti (vincitrice dello scudetto) e quali 
#verranno retrocesse (le ultime quattro in classifica). Utilizzare un solo file PHP che chiama sé stesso, utilizzare un template per l'HTML, 
#utilizzare il salvataggio serializzato su file per la persistenza dei dati.

$dbpath = 'classifica.db';
$database = fopen($dbpath, 'a+');
fclose($database);

$lista = [];
$str_lista= '';
$str_prima = '';
$str_retrocesse = '';
$file_content = file_get_contents($dbpath);

if (!empty($file_content) ) {
    $lista = unserialize($file_content);
} 

if(isset($_REQUEST['squadra']) && !empty($_REQUEST['squadra'])
    &&isset($_REQUEST['punti']) && !empty($_REQUEST['punti'])) {
        $lista[$_REQUEST['squadra']] = $_REQUEST['punti'];
        file_put_contents($dbpath, serialize($lista));
}

$classifica = $lista;
arsort($classifica);


foreach ($classifica as $k => $v) {
        $str_lista .= '<li>' . $k . ' ' . $v . '</li>';    
}

$sorted_squadre = array_keys($classifica);
if(count($sorted_squadre) > 4) {
    $str_prima = $sorted_squadre[0];
    $x = count($sorted_squadre) -4;
    //for($i = count($sorted_squadre) -1; $i > $x; $i-- )
    for($x; $x <= count($sorted_squadre) -1; $x++ )
    {
         $retrocesse []=  $sorted_squadre[$x] ;
         
    }
    $str_retrocesse = implode(', ', $retrocesse);
}

$contenuto = file_get_contents('template.html');
$contenuto = str_replace('{{lista}}', $str_lista, $contenuto);
$contenuto = str_replace('{{prima}}', $str_prima, $contenuto);
$contenuto = str_replace('{{retrocesse}}', $str_retrocesse, $contenuto);
echo $contenuto;