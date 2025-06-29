<?php
$pagine = array (
    'registro' => array (
        'contenuto' => array (
            'title'=> 'Registro Albergo',
            'h1' => 'Registro Albergo',
            'testo' => 'In questa pagina puoi visualizzare il registro dell\'albergo, modificare o cancellare le voci.<br>
                        Per inserire nuove prenotazioni, vai alla pagina di gestione.' 
        ),
        'template' => 'tpl/main.html',
        
    ),
    'gestione' => array (
        'contenuto' => array (
            'title'=> 'Gestione Registro',
            'h1' => 'Gestione Registro ',
            'testo' => 'In questa pagina puoi inseririre e modificare le voci del registro dell\'albergo.' 
        ),
        'template' => 'tpl/main.html',
        'include'=> 'inc/dati.php',
    ),
);




if(!isset($_REQUEST['p']) || !isset($pagine[$_REQUEST['p']])){
  $_REQUEST['p'] = 'registro';
}

