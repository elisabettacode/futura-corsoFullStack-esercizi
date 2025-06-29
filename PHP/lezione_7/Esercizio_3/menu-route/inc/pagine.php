<?php

$pagine = array (

    '0' => array (

        'contenuto' => array (
            'title' => 'Menu',
            'h1' => 'Benvenuto',
            'text' => 'Componi il tuo menù scegliendo un primo, un secondo e un dolce tra le opzioni disponibili.<br>Clicca Scegli per proseguire.'
        ),
        'template' => 'tpl/scegli.html'
    ),

     '1' => array (

        'contenuto' => array (
            'title' => 'Menu',
            'h1' => 'Il tuo Menù',
            'text' => '{{risultato}}'
        ),
        'template' => 'tpl/visualizza.html',
        'require' => 'output.php'
    ),

     '2' => array (

        'contenuto' => array (
            'title' => 'Menu',
            'h1' => 'Grazie per il tuo ordine',
            'text' => 'Il tuo ordine è andato a buon fine.<br>Arrivederci.'
        ),
        'template' => 'tpl/arrivederci.html'
    ),
);

if (!isset($_REQUEST['p']) || !isset($pagine[$_REQUEST['p']])) {
        $_REQUEST['p'] = '0';
    }