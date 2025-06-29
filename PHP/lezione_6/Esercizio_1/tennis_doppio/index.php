<?php
#Scrivere un programma che chieda all'utente di inserire i nomi di quattro giocatori di tennis, 
#e presenti una proposta di accoppiamenti per una partita in doppio. Utilizzare l'approccio per file, 
#i template HTML per la visualizzazione, e una libreria per il rendering.

require_once('lib/renderizzazione.php');

$pagina = array (

    'title' => 'Tennis Doppio',
    'h1' => 'Partecipanti',
    'contenuto' => 'Inserire nome e cognome dei partecipanti:'
);

$form = array (

     'giocatore1' => array (
        'lable'=> 'Giocatore 1:',
        'type'=> 'text',
        'name1'=> 'nome1',
        'placeholder1' => 'Nome',
        'name2'=> 'cognome1',
        'placeholder2' => 'Cognome'
    ),

    'giocatore2' => array (
        'lable'=> 'Giocatore 2:',
        'type'=> 'text',
        'name1'=> 'nome2',
        'placeholder1' => 'Nome',
        'name2'=> 'cognome2',
        'placeholder2' => 'Cognome'
    ),

    'giocatore3' => array (
        'lable'=> 'Giocatore 3:',
        'type'=> 'text',
        'name1'=> 'nome3',
        'placeholder1' => 'Nome',
        'name2'=> 'cognome3',
        'placeholder2' => 'Cognome'
    ),

    'giocatore4' => array (
        'lable'=> 'Giocatore 4:',
        'type'=> 'text',
        'name1'=> 'nome4',
        'placeholder1' => 'Nome',
        'name2'=> 'cognome4',
        'placeholder2' => 'Cognome'
    )
    

);

$contenuto = file_get_contents('tpl/index.html');

$contenuto = render_pagina($pagina, $contenuto);

$contenuto = render_form($form, $contenuto);

echo $contenuto;