<?php

$pagine = array (

    'index' => array (
        'contenuto'=> array (
            'title' => 'Tempo di percorrenza',
            'h1' => 'Tempo di percorrenza',
            'text' => 'Calcola il tempo di percorrenza. <br>Inserisci la distanza e la velocità media oraria.'
        ),
        'template'=> 'tpl/input.html'
    ),
    'risultato' => array (
        'contenuto'=> array (
            'title' => 'Tempo di percorrenza',
            'h1' => 'Tempo di percorrenza',
            'text' => 'Il tempo di percorrenza è: {{risultato}}'
        ),
        'template'=> 'tpl/output.html',
        'require' => array (
            1 => 'calcola_tempo_percorrenza.php',
            2 => 'output.php'
        )
    ) 
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

if (!isset($_REQUEST['p']) || !isset($pagine[$_REQUEST['p']])) {
        $_REQUEST['p'] = 'index';
    }