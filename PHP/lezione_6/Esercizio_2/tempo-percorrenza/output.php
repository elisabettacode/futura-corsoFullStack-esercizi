<?php

require_once('lib/render.php');
require_once('lib/calcola_tempo_percorrenza.php');

$pagina2 = array(

        'title' => 'Tempo di percorrenza',
        'h1' => 'Tempo di percorrenza',
        'contenuto' => 'Il tempo di percorrenza è: {{risultato}}'

);



if((isset($_GET['distanza']) && !empty($_GET['distanza'])) && 
(isset($_GET['velocita']) && !empty($_GET['velocita']))) {

    $distanza = $_GET['distanza'];
    $velocita = $_GET['velocita'];
    
    $risultato = tempo_percorrenza($distanza, $velocita);

};


$output = file_get_contents('tpl/output.html');

$output = render_pagina($pagina2, $output);

$output = str_replace('{{risultato}}' , $risultato, $output);

echo $output;

