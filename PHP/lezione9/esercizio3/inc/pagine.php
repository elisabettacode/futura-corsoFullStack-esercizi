<?php
$pagine = array (
    'registro' => array (
        'contenuto' => array (
            'title'=> 'Registro piloti',
            'h1' => 'Piloti e Teams',
            'testo' => 'In questa pagina puoi visualizzare le squadre e i loro piloti, modificare o cancellare le voci.<br>
                        Per inserire nuovi dati, vai alla pagina di gestione.' 
        ),
        'template' => 'tpl/main.html',
        'include' => [
            'mod/gestione_registro_piloti.php',
            'mod/gestione_registro_squadre.php',
            'mod/table_tpl.php'
            ]    
    ),
    'gestione' => array (
        'contenuto' => array (
            'title'=> 'Gestione Registro',
            'h1' => 'Gestione Registro Piloti',
            'testo' => 'In questa pagina puoi inseririre e modificare le voci del Registro Piloti.' 
        ),
        'template' => 'tpl/main.html',
        'include'=> [
            'inc/dati.php', 
            'mod/gestione_registro_piloti.php',
            'mod/gestione_registro_squadre.php',
            'mod/form_tpl.php'
            ]
    ),
);


$pag = $_REQUEST['p'];

if(!isset($pag) || !isset($pagine[$pag])){
  $pag = 'registro';
}

