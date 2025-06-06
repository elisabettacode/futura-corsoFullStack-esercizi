<?php

require_once('lib/renderizzazione.php');
require_once('lib/coppie-random.php');

$pagina2 = array (

    'title' => 'Tennis Doppio',
    'h1' => 'Formazione squadre',
    'contenuto' => 'La formazione delle squadre è stata sorteggiata: <br>{{risultato}}'
);



$output =  file_get_contents('tpl/squadre.html');

$output = render_pagina($pagina2, $output);



if((isset($_POST['nome1']) && !empty($_POST['nome1'])) &&
(isset($_POST['cognome1']) && !empty($_POST['cognome1']))) {

    $giocatore1 = $_POST['nome1'] . ' ' . $_POST['cognome1'];
}

if((isset($_POST['nome2']) && !empty($_POST['nome2'])) &&
(isset($_POST['cognome2']) && !empty($_POST['cognome2']))) {

    $giocatore2 = $_POST['nome2'] . ' ' . $_POST['cognome2'];
}

if((isset($_POST['nome3']) && !empty($_POST['nome3'])) &&
(isset($_POST['cognome3']) && !empty($_POST['cognome3']))) {

    $giocatore3 = $_POST['nome3'] . ' ' . $_POST['cognome3'];
}

if((isset($_POST['nome4']) && !empty($_POST['nome4'])) &&
(isset($_POST['cognome4']) && !empty($_POST['cognome4']))) {

    $giocatore4 = $_POST['nome4'] . ' ' . $_POST['cognome4'];
}

$giocatori = array ( $giocatore1, $giocatore2, $giocatore3, $giocatore4);

$coppie_giocatori = genera_coppie_random($giocatori); 

$risultato = '';         
$numcoppia = 1;                                             #coppie = array ( [g1,g2])

foreach ($coppie_giocatori as $coppia) {

    $risultato .= 'Coppia ' . $numcoppia . ': ' . $coppia[0] . ' ' . $coppia[1] . '<br>';
    $numcoppia +=1;
}

$output = str_replace('{{risultato}}' , $risultato, $output);

echo $output;