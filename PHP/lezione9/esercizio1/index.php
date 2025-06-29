<?php
#Scrivere un programma che consenta di gestire gli ospiti di un albergo registrando nome, 
#telefono e numero di camera. Il programma deve consentire l'inserimento, la modifica e la 
#cancellazione degli ospiti.


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