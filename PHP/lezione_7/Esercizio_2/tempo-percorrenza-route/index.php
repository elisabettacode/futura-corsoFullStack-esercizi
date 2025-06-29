<?php

#Utilizzando l'approccio per route, riscrivere l'esercizio 02 della lezione 06. 
#Prestare particolare attenzione alla necessità di specificare inclusioni diverse per le varie pagine, 
#quindi nell'array delle pagine prevedere, oltre ai contenuti e al template, anche la specifica dei file da includere.

include_once('inc/pagine.php');
require_once('lib/render.php');


$contenuto = render_pagina(
        $pagine[$_REQUEST['p']]['contenuto'],
        $pagine[$_REQUEST['p']]['template']
    );

if ($_REQUEST['p'] == 'index') {

    $contenuto = render_form($form , $contenuto);
};

if( isset($pagine[$_REQUEST['p']]['require']) ) {
        require_once 'lib/' . $pagine[$_REQUEST['p']]['require'][1];
        require_once 'inc/' . $pagine[$_REQUEST['p']]['require'][2];
};


echo $contenuto;