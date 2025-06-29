<?php
#Partendo dal programma precedente, aggiungere la data di arrivo e la data di partenza; 
#colorare di rosso le date di partenza uguali o precedenti a oggi; implementare una funzione 
#che avvisi se c'è overbooking di una camera.


require_once('inc/pagine.php');
require_once('lib/render.php');
require_once('inc/gestione_registro.php');


$contenuto = Render\render_pagina(
        $pagine[$_REQUEST['p']]['contenuto'],
        $pagine[$_REQUEST['p']]['template']
    );

if ($_REQUEST['p'] == 'registro') {
    $contenuto_tabella = '<table>';
    $contenuto = Render\render_table($lista , $contenuto);
}

if( isset($pagine[$_REQUEST['p']]['include']) ) {
        require_once ($pagine[$_REQUEST['p']]['include']);
//        require_once ( $pagine[$_REQUEST['p']]['include'][1]);
};

if ($_REQUEST['p'] == 'gestione') {
    
    $contenuto = Render\render_form($form , $contenuto, $lista);
};



$contenuto = Render\render_menu($pagine, $contenuto);

echo $contenuto;