<?php

#Scrivere un programma che calcoli il tempo di percorrenza di un viaggio dati la distanza in Km e la velocità media in Km/h. 
#Utilizzare i template per l'HTML, una libreria per il rendering, e una libreria per il calcolo del tempo.


require_once('lib/render.php');

$pagina = array(

        'title' => 'Tempo di percorrenza',
        'h1' => 'Tempo di percorrenza',
        'contenuto' => 'Calcola il tempo di percorrenza. <br>Inserisci la distanza e la velocità media oraria.'

);

$form = array (
    'distanza' => array (
        'lable'=> 'Distanza:',
        'type'=> 'text',
        'name'=> 'distanza'
    ),
    'velocita' => array (
        'lable'=> 'Velocità:',
        'type'=> 'text',
        'name'=> 'velocita'
    ),
    
     );


     $contenuto = file_get_contents('tpl/index.html');

     $contenuto = render_pagina($pagina, $contenuto);

     $contenuto = render_form($form, $contenuto);

     echo $contenuto;