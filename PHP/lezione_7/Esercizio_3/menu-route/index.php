<?php

#Utilizzando l'approccio per route, scrivere un sito che proponga all'utente tre tendine per scegliere il primo, 
#il secondo e il dolce, dopodiché una volta fatta la scelta portare l'utente a una pagina di conferma che mostri 
#il menù e il costo totale delle portate e un tasto per la conferma, infine una pagina che ringrazi l'utente dopo 
#la conferma del menù scelto.

require_once('inc/piatti.php');
require_once('inc/pagine.php');
require_once('lib/render.php');



$contenuto = render_pagina(
        $pagine[$_REQUEST['p']]['contenuto'],
        $pagine[$_REQUEST['p']]['template']
    );

if( isset($pagine[$_REQUEST['p']]['require']) ) {
        
        require_once 'inc/' . $pagine[$_REQUEST['p']]['require'];
};

if ($_REQUEST['p'] == '0') {

    $select = render_select($tipologie, $piatti, $contenuto);
    $contenuto = str_replace('{{select}}', $select, $contenuto);
};

if ($_REQUEST['p'] == '1') {


    $contenuto = str_replace('{{primo}}', $primo, $contenuto);
    $contenuto = str_replace('{{secondo}}', $secondo, $contenuto);
    $contenuto = str_replace('{{dolce}}', $dolce, $contenuto);
};



echo $contenuto;


    
