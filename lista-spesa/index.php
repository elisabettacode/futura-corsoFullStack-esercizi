<?php

/*Scrivere un programma che consenta di compilare una semplice lista della spesa. 
Utilizzare un solo file PHP che chiama sé stesso, utilizzare un template per l'HTML, 
utilizzare il salvataggio serializzato su file per la persistenza dei dati.*/

$dbpath = 'spesa.db';
$database = fopen($dbpath, 'a+');
fclose($database);

$lista = [];
$str_lista= '';
$file_content = file_get_contents($dbpath);

if (!empty($file_content) ) {
    $lista = unserialize($file_content);
} 

if(isset($_REQUEST['nome']) && !empty($_REQUEST['nome'])) {
        $lista[] = [$_REQUEST['nome']=>$_REQUEST['quantita']];
        file_put_contents($dbpath, serialize($lista));
}

foreach ($lista as $key => $value) {
    foreach ($value as $k => $v) {
        $str_lista .= '<li>' . $k . ' ' . $v . '</li>';
    }
}

$contenuto = file_get_contents('main.html');
$contenuto = str_replace('{{lista}}', $str_lista, $contenuto);
echo $contenuto;