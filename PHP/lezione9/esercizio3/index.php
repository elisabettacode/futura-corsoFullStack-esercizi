<?php
#Scrivere un programma che consenta di gestire piloti e team, ad ogni pilota deve poter essere associato nome, 
#punteggio e team. Dev'essere possibile inserire, modificare ed eliminare i piloti; utilizzare una tendina per 
#associare i piloti ai loro team.

require_once('inc/pagine.php');
require_once('lib/render.php');

$contenuto = Render\render_pagina(
        $pagine[$pag]['contenuto'],
        $pagine[$pag]['template']
    );

if( isset($pagine[$pag]['include']) ) {
    
        foreach ($pagine[$pag]['include'] as $include) {
            require_once $include;
        }
}
$contenuto = Render\render_menu($pagine, $contenuto);

echo $contenuto;       