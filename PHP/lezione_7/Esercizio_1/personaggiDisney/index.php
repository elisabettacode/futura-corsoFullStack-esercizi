<?php

#Utilizzando l'approccio per route, scrivere un sito formato da una pagina index, contenente un elenco di personaggi Disney cliccabili,
# i cui link devono riportare a una pagina dedicata per ogni personaggio con il nome e una brevissima nota biografica. 
#Ogni pagina del personaggio deve contenere un link per tornare alla home page. Utilizzare librerie, 
#inclusioni e template per mantenere il codice asciutto e ordinato.



    require_once 'lib/render.php';

    require_once 'inc/pagine.php';
    
    $contenuto = render_pagina(
        $pagine[$_REQUEST['p']]['contenuto'],
        $pagine[$_REQUEST['p']]['template']
    );

    if ($_REQUEST['p'] == 'home') {

        $contenuto = render_list($lista , $contenuto);
    };

    echo $contenuto;