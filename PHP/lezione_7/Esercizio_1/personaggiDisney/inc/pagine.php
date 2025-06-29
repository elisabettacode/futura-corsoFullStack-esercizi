<?php

$pagine = array (

    'home' => array (
       'contenuto' => array (
            'title' => 'Personaggi Disney',
            'h1' => 'Personaggi Disney',
            'testo' => 'Clicca sul personaggio per vedere le informazioni.'
       ),
       'template' => 'tpl/index.html'
    ),

    'pippo' => array (
       'contenuto' => array (
            'title' => 'Personaggi Disney',
            'h1' => 'Pippo',
            'testo' => 'Descrizione di Pippo'
       ),
       'template' => 'tpl/bio.html'
    ),

    'pluto' => array (
       'contenuto' => array (
            'title' => 'Personaggi Disney',
            'h1' => 'Pluto',
            'testo' => 'Descrizione di Pluto.'
       ),
       'template' => 'tpl/bio.html'
    ),

    'paperino' => array (
       'contenuto' => array (
            'title' => 'Personaggi Disney',
            'h1' => 'Personaggi Disney',
            'testo' => 'Descrizione di Paperino.'
       ),
       'template' => 'tpl/bio.html'
    )

    );

$lista = array (

    1 => array (
        'link' => 'pippo.html',
        'descrizione' => 'Pippo'
    ),

     2 => array (
        'link' => 'pluto.html',
        'descrizione' => 'Pluto'
    ),

     3 => array (
        'link' => 'paperino.html',
        'descrizione' => 'Paperino'
    ),

);

if (!isset($_REQUEST['p']) || !isset($pagine[$_REQUEST['p']])) {
        $_REQUEST['p'] = 'home';
    }